<?php
/**
 * ThemeWPUGPH child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ThemeWPUGPH-Child
 */

add_action( 'wp_enqueue_scripts', 'themewpugph_child_scripts' );
function themewpugph_child_scripts() {

	if ( defined( 'WP_DEBUG' ) && true === WP_DEBUG ) {
		$childstyles   = '/style.css';
	} else {
		$childstyles   = '/style.min.css';
	}

    wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() . '/style.css' );
}