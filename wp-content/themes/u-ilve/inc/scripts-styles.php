<?php

if (!defined('THEME_VERSION')) {
	define('THEME_VERSION', '1.2.1');
}

function u_ilve_scripts() {
	wp_enqueue_style('u-ilve-bundle-css', get_template_directory_uri() . '/assets/css/bundle.css', [], THEME_VERSION);
	
	wp_enqueue_script('u-ilve-bundle-js', get_template_directory_uri() . '/assets/js/bundle.js', [], THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'u_ilve_scripts');