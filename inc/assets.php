<?php
/**
 * Enqueue theme assets
 * 
 * @package BoilerPressWP
 */

namespace BoilerPress\Assets;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'enqueue_theme_assets' ) ) {

	function enqueue_theme_assets() {

		// Get theme version
		$theme_version = wp_get_theme()->get( 'Version' );

		/**
		 * Theme stylesheets
		 * 
		 */
		$css_version = $theme_version . '.' . filemtime( BOILERPRESS_STYLESHEETS_DIR . 'main.min.css' );
		wp_enqueue_style( 'boilerpress-styles', BOILERPRESS_STYLESHEETS_URI . 'main.min.css', array(), $css_version );

		/**
		 * Theme scripts
		 * 
		 */
		$js_version = $theme_version . '.' . filemtime( BOILERPRESS_SCRIPTS_DIR . 'main.min.js' );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'boilerpress-scripts', BOILERPRESS_SCRIPTS_URI . 'main.min.js', array(), $js_version, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_theme_assets' );