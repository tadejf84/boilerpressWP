<?php
/**
 * Security settings
 *
 * @package BoilerPressWP
 */

namespace BoilerPress\Security;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Clean up wp_head() from unused or unsecure stuff
 *
 * Remove WP versions
 * 
 */
function theme_cleanup() {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10);
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\theme_cleanup' );


/**
 * Remove emoji script
 *
 */
function remove_emojis(){
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\remove_emojis' );


/**
 * Hide info on failed login for security.
 *
 * @return string
 */
function hide_login_errors_info() {
	return '<strong>ERROR</strong>: Stop guessing!';
}
add_filter( 'login_errors', __NAMESPACE__ . '\\hide_login_errors_info' );


/**
 * Disable feeds
 * 
 * Redirect to the homepage all users trying to access feeds.
 */
function disable_feeds() {
	wp_redirect( home_url() );
	die;
}

// Disable global RSS, RDF & Atom feeds
add_action( 'do_feed', __NAMESPACE__ . '\\disable_feeds', -1 );
add_action( 'do_feed_rdf', __NAMESPACE__ . '\\disable_feeds', -1 );
add_action( 'do_feed_rss', __NAMESPACE__ . '\\disable_feeds', -1 );
add_action( 'do_feed_rss2', __NAMESPACE__ . '\\disable_feeds', -1 );
add_action( 'do_feed_atom', __NAMESPACE__ . '\\disable_feeds', -1 );

// Disable comment feeds.
add_action( 'do_feed_rss2_comments', __NAMESPACE__ . '\\disable_feeds', -1 );
add_action( 'do_feed_atom_comments', __NAMESPACE__ . '\\disable_feeds', -1 );

// Prevent feed links from being inserted in the <head> of the page.
add_action( 'feed_links_show_posts_feed',    '__return_false', -1 );
add_action( 'feed_links_show_comments_feed', '__return_false', -1 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );


/**
 * Disable XML-RPC
 * 
 */
add_filter('xmlrpc_enabled', '__return_false');
