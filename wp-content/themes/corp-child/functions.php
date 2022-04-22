<?php
/**
 * Corp-child Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package corp-child
 */

add_action( 'wp_enqueue_scripts', 'siteorigin_corp_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function siteorigin_corp_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'siteorigin-corp-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'corp-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'siteorigin-corp-style' ]
	);
}