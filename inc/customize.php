<?php 
/**
 * Customize WordPress
 * 
 * @package BoilerPressWP
 */

namespace BoilerPress\Customize;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Customize read more text for excerpts
 *
 * @param string 
 * 
 * @return string
 */
if ( ! function_exists( 'custom_excerpt_more_text' ) ) {

	function custom_excerpt_more_text( $more ) {
        if ( ! is_admin() ) {
            $more = '';
        }
        return $more;
    }
    
}

add_filter( 'excerpt_more', __NAMESPACE__ . '\\custom_excerpt_more_text' );


/**
 * Customize read more link for excerpts
 *
 * @param string
 *
 * @return string
 */
if ( ! function_exists( 'customize_excerpt_more_link' ) ) {

	function customize_excerpt_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . '<a class="btn btn--primary" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'Read More', 'boilerpress' ) . '</a>';
		}
		return $post_excerpt;
    }
    
}

add_filter( 'wp_trim_excerpt',  __NAMESPACE__ . '\\customize_excerpt_more_link' );


/**
 * Customize the archive title
 *
 * @param string Title
 *
 * @return string
 */
if ( ! function_exists( 'customize_archive_title' ) ) {

    function customize_archive_title( $title ) {
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

}

add_filter( 'get_the_archive_title', __NAMESPACE__ . '\\customize_archive_title' );
