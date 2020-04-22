<?php
/**
 * Theme basic setup
 *
 * @package BoilerPressWP
 */

namespace BoilerPress\Setup;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'theme_setup' ) ) {

    function theme_setup() {

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // WP Document title
        add_theme_support( 'title-tag' );

        // WP Nav Menus
        register_nav_menus( array(
            'main-menu' => __( 'Main Menu', 'boilerpress' ),
        ) );

        // This feature allows the use of HTML5 markup for the search forms, comment forms, comment lists, gallery, and caption.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Post thumbnails support
        add_theme_support( 'post-thumbnails' );

        // Post formats support
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ) );

        // Custom logo support
        add_theme_support( 'custom-logo' );

        // Responsive embeds support
        add_theme_support( 'responsive-embeds' );

    }

}

add_action( 'after_setup_theme', __NAMESPACE__ . '\\theme_setup' );
