<?php
/**
 * Theme basic setup
 *
 * @package BoilerPressWP
 */

namespace BoilerPress\Setup;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', __NAMESPACE__ . '\\theme_setup' );

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

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

        // Post Thumbnails Support
		add_theme_support( 'post-thumbnails' );

        // Post Formats Support
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// Custom logo support.
		add_theme_support( 'custom-logo' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

	}
}


add_filter( 'excerpt_more', __NAMESPACE__ . '\\custom_excerpt_more_text' );

if ( ! function_exists( 'custom_excerpt_more_text' ) ) {
	/**
	 * Customize read more text for excerpts
	 *
	 * @param string 
     * 
	 * @return string
	 */
	function custom_excerpt_more_text( $more ) {
		if ( ! is_admin() ) {
			$more = '';
		}
		return $more;
	}
}

add_filter( 'wp_trim_excerpt',  __NAMESPACE__ . '\\custom_excerpt_more_link' );

if ( ! function_exists( 'custom_excerpt_more_link' ) ) {
	/**
	 * Customize read more link for excerpts
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function custom_excerpt_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . '<a class="btn btn--read-more" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'Read More', 'boilerpress' ) . '</a>';
		}
		return $post_excerpt;
	}
}


/**
 * Customize the archive title
 *
 * @param string Title
 *
 * @return string
 */
add_filter( 'get_the_archive_title', __NAMESPACE__ . '\\customize_archive_title' );
function customize_archive_title($title) {
	if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = get_the_author() . ' ' . _e( 'Archives', 'boilderpress' );
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    } else {
        $title = _e( 'Blog', 'boilderpress' );
    }
    return $title;
}
