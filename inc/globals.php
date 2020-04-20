<?php
/**
 * Theme globals
 * 
 * @package BoilerPressWP
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Define stylesheets and scripts dir and URI
 * 
 */
define( "BOILERPRESS_STYLESHEETS_DIR", get_template_directory() . '/dist/css/' );
define( "BOILERPRESS_STYLESHEETS_URI", get_template_directory_uri() . '/dist/css/' );
define( "BOILERPRESS_SCRIPTS_DIR", get_template_directory() . '/dist/js/' );
define( "BOILERPRESS_SCRIPTS_URI", get_template_directory_uri() . '/dist/js/' );