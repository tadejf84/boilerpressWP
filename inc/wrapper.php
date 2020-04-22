<?php
/**
 * Generate HTML wrapper
 * 
 * Wraps all pages
 * 
 * @package BoilerPressWP
 */

namespace BoilerPress\Wrapper;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Class TemplateWrapper
 * 
 */
if ( ! class_exists( 'TemplateWrapper' ) ) {

	class TemplateWrapper {

		public static $main_template;	// Main template path
		public static $base; 			// Template basename - for example for page.php is page

		public static function wrap ( $template ) {
            self::$main_template = $template;
            self::$base = substr( basename( self::$main_template ), 0, -4 );

            if ( 'index' == self::$base ) {
                self::$base = false;
            }
			
		    $templates = array( 'wrapper.php' );

            if ( self::$base ) {
                array_unshift( $templates, sprintf( 'wrapper-%s.php', self::$base ) );
            }
			
		    return locate_template( $templates );
        }
        
	}

	add_filter( 'template_include', array( __NAMESPACE__ . '\\TemplateWrapper', 'wrap' ) );

}


/**
 * Get main template path
 * 
 */
if ( ! function_exists( 'template_path' ) ) {

    function template_path() {
        return TemplateWrapper::$main_template;
    }

}


/**
 * Get base
 * 
 */
if ( ! function_exists( 'template_base' ) ) {

    // Get base
    function template_base() {
        return TemplateWrapper::$base;
    }

}
