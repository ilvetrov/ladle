const gulp = require('gulp');
const log = require('gulplog');
const browserify = require('browserify');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify-es').default;
const autoprefixer = require('gulp-autoprefixer');
const plumber = require('gulp-plumber');
const fs = require('fs');
const chmod = require('gulp-chmod');
const source = require('vinyl-source-stream');
const buffer = require('vinyl-buffer');
const imagemin = require('gulp-imagemin');
const imageminJpegRecompress = require('imagemin-jpeg-recompress');
const pngquant = require('imagemin-pngquant');
const glob = require('glob');
const watchify = require('watchify');
const color = require('./libs/terminal-color');
const { getFileName } = require('./libs/get-file-name');
const babelify = require('babelify');
const through2 = require('through2');
const { removeFileSafely } = require('./libs/remove-file-safely');

const setNewTime = () => through2.obj(function(file, enc, cb) {
	if (file.stat) {
		file.stat.atime = file.stat.mtime = file.stat.ctime = new Date();
	}
	cb(null, file);
});

//Tasks

exports.default = function (done) {
	console.log('Hello, Gulp!');
	done();
}

class SourceToPublic {
	static cssRoutes = [];

	constructor(pathPrefix = '', name = 'default') {
		this.pathPrefix = pathPrefix;
		this.name = name;

		SourceToPublic.cssRoutes.push(this.pathPrefix + 'source/scss/**/*.scss');
	}

	cssDev = () => {
		return gulp.src(this.pathPrefix + 'source/scss/*.scss')
		.pipe(plumber())
		.pipe(sass().on('error', sass.logError))
		.pipe(setNewTime())
		.pipe(gulp.dest(this.pathPrefix + 'assets/css'));
	}

	cssMin = () => {
		return gulp.src(this.pathPrefix + 'source/scss/*.scss')
		.pipe(plumber())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(cleanCSS())
		.pipe(setNewTime())
		.pipe(gulp.dest(this.pathPrefix + 'assets/css'));
	}

	getJs = () => {
		return glob.sync(this.pathPrefix + 'source/js/*.js');
	}
	
	jsDev = (entries = this.getJs()) => {

		for (let i = 0; i < entries.length; i++) {
			const entryPath = entries[i];
			const entryName = entryPath.split('/')[entryPath.split('/').length - 1];
			
			const watchifyBuild = watchify(browserify({
				entries: entryPath,
				debug: true,
				cache: {},
				packageCache: {}
			})
			.transform(babelify, {
				parserOpts: {
					sourceType: 'module',
					allowImportExportEverywhere: true,
				},
				presets: ['@babel/preset-env']
			}));
			const watchifyBundle = () => {
				return watchifyBuild.bundle()
				.on('error', (data) => {
					log.error(data);
				})
				.pipe(source(getFileName(entryPath)))
				.pipe(buffer())
				.pipe(chmod(0o664))
				.pipe(setNewTime())
				.pipe(gulp.dest(this.pathPrefix + 'assets/js/'));
			}

			watchifyBuild.on('update', watchifyBundle);
			watchifyBuild.on('log', (data) => {
				log.info(`Finished '${color.fgCyan}jsDev of ${this.name} - ${entryName}${color.reset}': ` + data);
			});


			watchifyBundle();
		}
	}

	jsMin = () => {
		const entries = glob.sync(this.pathPrefix + 'source/js/*.js');

		for (let i = 0; i < entries.length; i++) {
			const entryPath = entries[i];
			
			const task = browserify({
				entries: entryPath
			})
			.transform(babelify, {
				minified: true,
				parserOpts: {
					sourceType: 'module',
					allowImportExportEverywhere: true,

				},
				comments: false,
				presets: ['@babel/preset-env']
			})
			.bundle()
			.pipe(source(getFileName(entryPath)))
			.pipe(buffer())
			.pipe(plumber())
			.pipe(uglify({
				parse: {
					bare_returns: true,
					ecma: 5,
					module: true
				},
				mangle: {
					keep_classnames: false,
					keep_fnames: false,
					module: true
				},
				ie8: true
			}))
			.pipe(chmod(0o664))
			.pipe(setNewTime())
			.pipe(gulp.dest(this.pathPrefix + 'assets/js/'));

			if (i === entries.length - 1) {
				return task;
			}
		}
	}

	jsBuild = () => {
		return this.jsMin();
	}

	syncImages = (done) => {
		const sourceImages = glob.sync(this.pathPrefix + 'source/img-entry/**');
		const buildImages = glob.sync(this.pathPrefix + 'assets/img/**');
	
		for (let i = 0; i < sourceImages.length; i++) {
			const sourceImage = sourceImages[i];
			const regExp = new RegExp(`^${this.pathPrefix}source/img-entry/(.+)`);
			const relativePath = (sourceImage.match(regExp) || [])[1];
			if (relativePath) {
				const buildPath = this.pathPrefix + 'assets/img/' + relativePath;
		
				if (buildImages.indexOf(buildPath) === -1) {
					this.minifyImg(sourceImage, () => {
						removeFileSafely(sourceImage);
					});
				} else {
					removeFileSafely(sourceImage);
				}
			}
		}
	
		done();
	}

	minifyImg = (path, callback = null) => {
		const relativeFolderRegExp = new RegExp(`^${this.pathPrefix}source/img-entry/(.+?)/[^/]+$`);
		const relativeFolder = (path.match(relativeFolderRegExp) || [])[1] || '';

		return gulp.src(path)
		.pipe(imagemin([
			imagemin.gifsicle({interlaced: true}),
			imagemin.mozjpeg({progressive: true}),
			imageminJpegRecompress({
				loops: 5,
				min: 65,
				max: 70,
				quality: 'medium'
			}),
			imagemin.svgo(),
			imagemin.optipng({optimizationLevel: 3}),
			pngquant({quality: [0.75, 0.8], speed: 8})
		],{
			verbose: true
		}))
		.pipe(setNewTime())
		.pipe(gulp.dest(this.pathPrefix + 'assets/img/' + relativeFolder))
		.on('end', () => {
			if (callback) {
				callback();
			}
		});
	}

	build = () => {
		return new Promise((resolve, reject) => {
			gulp.parallel(this.jsBuild, this.cssMin, this.syncImages)(() => {
				resolve();
			})
		});
	}

	dev = () => {
		gulp.parallel(this.cssDev, this.syncImages)();
	
		const startJsEntries = this.getJs();
		this.jsDev(startJsEntries);

		gulp.watch(this.pathPrefix + 'source/js/*').on('add', (path, stats) => {
			const outputPath = path;
			if (startJsEntries.indexOf(outputPath) === -1) {
				startJsEntries.push(outputPath);
				this.jsDev([outputPath]);
			}
		});
		
		gulp.watch(SourceToPublic.cssRoutes).on('change', gulp.series(this.cssDev));
	
		gulp.watch(this.pathPrefix + 'source/img-entry/**').on('add', (path, stats) => {
			this.minifyImg(path, () => {
				removeFileSafely(path);
			});
		});
	}

}

const globalPathPrefix = 'wp-content/themes/u-ilve/';
const front = new SourceToPublic(globalPathPrefix, 'front');

exports.build = function(done) {
	Promise.all([
		front.build(),
	])
	.then(() => {
		done();
	});
}

exports.dev = function() {
	front.dev();
}