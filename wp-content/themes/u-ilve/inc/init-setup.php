<?php

if (!function_exists('u_ilve_setup')):
	function u_ilve_setup() {
		load_theme_textdomain('u_ilve', get_template_directory() . '/languages');

		add_theme_support('automatic-feed-links');

		add_theme_support('title-tag');

		add_theme_support('post-thumbnails');

		require_once get_template_directory() . '/inc/nav-menus.php';

		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			]
		);

		add_theme_support(
			'custom-background',
			apply_filters(
				'u_ilve_custom_background_args',
				[
					'default-color' => 'ffffff',
					'default-image' => '',
				]
			)
		);

		add_theme_support('customize-selective-refresh-widgets');

		add_theme_support(
			'custom-logo',
			[
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			]
		);
	}
endif;
add_action('after_setup_theme', 'u_ilve_setup');