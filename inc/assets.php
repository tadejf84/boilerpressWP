<?php
namespace BoilerPress\Assets;

/**
 * Enqueue scripts
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// define CSS and JS directories and URI
define( "BOILERPRESS_STYLESHEETS_DIR", get_template_directory() . '/dist/css/' );
define( "BOILERPRESS_STYLESHEETS_URI", get_template_directory_uri() . '/dist/css/' );
define( "BOILERPRESS_SCRIPTS_DIR", get_template_directory() . '/dist/js/' );
define( "BOILERPRESS_SCRIPTS_URI", get_template_directory_uri() . '/dist/js/' );

if ( ! function_exists( 'enqueue_theme_assets' ) ) {

	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function enqueue_theme_assets() {

		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

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