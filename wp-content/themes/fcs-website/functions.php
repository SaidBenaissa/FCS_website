<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');   

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu'    => __('Primary Menu'),
			'header-top-menu' => __('Header Top Menu'),
			'resources-page-side-menu' => __('Resources Page Side Menu'),
			'people-page-side-menu' => __('People Page Side Menu'),
			'news-page-side-menu' => __('News Page Side Menu'),
			'about-page-side-menu' => __('About Page Side Menu'),
			'contact-page-side-menu' => __('Contact Page Side Menu')
		)
	);

}

add_action('init', 'register_theme_menus');

function fcs_theme_styles() {

	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');

}

add_action('wp_enqueue_scripts', 'fcs_theme_styles');

function fcs_theme_js() {

	wp_enqueue_script('masonry_js', get_template_directory_uri() . '/js/masonry.js', array('jquery'), '', true);
	wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
	wp_enqueue_script('googlemap_js', 'https://maps.googleapis.com/maps/api/js', '', '', true);

}

add_action('wp_enqueue_scripts', 'fcs_theme_js');

?>