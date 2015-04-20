<?php


function theme_styles() {

	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/bower_components/normalize-css/normalize.css' );
	wp_enqueue_style( 'gridism_css', get_template_directory_uri() . '/bower_components/gridism/gridism.css' );
	wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . '/bower_components/font-awesome/css/font-awesome.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );
