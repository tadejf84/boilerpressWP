<?php
/**
 * Theme functions
 * 
 * @package BoilerPressWP
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Function includes
 * 
 */
$boilerpress_includes = array(
    'globals.php',              // Theme constants
    'helpers.php',              // Place your own helper functions if needed
    'setup.php',                // Theme basic setup
    'customize.php',            // Theme customizations
    'performance.php',          // Performace & security fixes
    'cpt-register.php',         // Register custom post type & custom taxonomies
    'assets.php',               // Enqueue theme assets
    'wrapper.php',              // Create a HTML Wrapper markup to wrap all templates
    'navigation.php',           // Custom theme navigation functions - pagination, post navigation, etc.
    'widgets.php',              // Init widgets
);

foreach ( $boilerpress_includes as $bp_inc ) {
	require_once get_template_directory() . '/inc/' . $bp_inc;
}