<?php
/**
 * Define your theme constants here
 * 
 * @package BoilerPressWP
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Define theme directory and URI
 * 
 */
define( "BOILERPRESS_THEME_DIR", get_template_directory() );
define( "BOILERPRESS_THEME_URI", get_template_directory_uri() );


/**
 * Define stylesheets and scripts dir and URI
 * 
 * IMPORTANT! They are used in inc/assets.php
 */
define( "BOILERPRESS_STYLESHEETS_DIR", BOILERPRESS_THEME_DIR . '/dist/css/' );
define( "BOILERPRESS_STYLESHEETS_URI", BOILERPRESS_THEME_URI . '/dist/css/' );
define( "BOILERPRESS_SCRIPTS_DIR", BOILERPRESS_THEME_DIR . '/dist/js/' );
define( "BOILERPRESS_SCRIPTS_URI", BOILERPRESS_THEME_URI . '/dist/js/' );


/**
 * Define media URI - for images & videos
 * 
 */
define( "BOILERPRESS_MEDIA_URI", BOILERPRESS_THEME_URI . '/dist/img/' );
