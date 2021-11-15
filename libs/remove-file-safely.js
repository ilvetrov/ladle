const fs = require('fs');

function removeFileSafely(path) {
	fs.lstat(path, (err, stats) => {
		if (err) throw err;
		if (!stats.isDirectory()) {
			fs.unlink(path, (err) => {
				if (err) throw err;
			});
		}
	});
}

module.exports = {
	removeFileSafely
}