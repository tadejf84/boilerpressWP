<?php
/**
 * Register custom post types & custom taxonomies
 * 
 * @package BoilerPressWP
 */

namespace BoilerPress\Cpt;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 *  CPT registration
 * 
 */
if ( ! function_exists( 'custom_post_type_register' ) ) {

    function custom_post_type_register()
    {
    
        /**
         * Example CPT
         * 
         * Change to your own
         * 
         */
        $labels = array(
            'name'                => _x( 'Example', 'Post Type General Name', BOILERPRESS_TEXT_DOMAIN ),
            'singular_name'       => _x( 'Example', 'Post Type Singular Name', BOILERPRESS_TEXT_DOMAIN ),
            'menu_name'           => __( 'Examples', BOILERPRESS_TEXT_DOMAIN ),
            'parent_item_colon'   => __( 'Parent Item', BOILERPRESS_TEXT_DOMAIN ),
            'all_items'           => __( 'All Items', BOILERPRESS_TEXT_DOMAIN ),
            'view_item'           => __( 'View Items', BOILERPRESS_TEXT_DOMAIN ),
            'add_new_item'        => __( 'Add New Item', BOILERPRESS_TEXT_DOMAIN ),
            'add_new'             => __( 'Add New', BOILERPRESS_TEXT_DOMAIN ),
            'edit_item'           => __( 'Edit', BOILERPRESS_TEXT_DOMAIN ),
            'update_item'         => __( 'Update', BOILERPRESS_TEXT_DOMAIN ),
            'search_items'        => __( 'Search', BOILERPRESS_TEXT_DOMAIN ),
            'not_found'           => __( 'Not found', BOILERPRESS_TEXT_DOMAIN ),
            'not_found_in_trash'  => __( 'Not found in trash', BOILERPRESS_TEXT_DOMAIN ),
        );

        $args = array(
            'label'               => __( 'Example', BOILERPRESS_TEXT_DOMAIN ),
            'description'         => __( 'Description', BOILERPRESS_TEXT_DOMAIN ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'author' ),
            'taxonomies'          => array( ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 4,
            'menu_icon'           => 'dashicons-book',
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => false,
        );

        register_post_type( 'example_cpt', $args );
        
    }
}

// add_action( 'init', __NAMESPACE__ . '\\custom_post_type_register' );


/**
 *  Custom taxonomies registration
 * 
 */
if ( ! function_exists( 'custom_taxonomy_register' ) ) {

    function custom_taxonomy_register()
    {
    
        /**
         * Example taxonomy
         * 
         * Change to your own
         * 
         */
        $labels = array(
            'name'                       => _x( 'Example taxonomy', 'taxonomy general name', BOILERPRESS_TEXT_DOMAIN ),
            'singular_name'              => _x( 'Example taxonomy', 'taxonomy singular name', BOILERPRESS_TEXT_DOMAIN ),
            'search_items'               => __( 'Search Iems', BOILERPRESS_TEXT_DOMAIN ),
            'popular_items'              => __( 'Popular Items', BOILERPRESS_TEXT_DOMAIN ),
            'all_items'                  => __( 'All Items', BOILERPRESS_TEXT_DOMAIN ),
            'parent_item'                => __( 'Parent Item', BOILERPRESS_TEXT_DOMAIN ),
            'parent_item_colon'          => __( 'Parent Item: ', BOILERPRESS_TEXT_DOMAIN ),
            'edit_item'                  => __( 'Edit Item', BOILERPRESS_TEXT_DOMAIN ),
            'update_item'                => __( 'Update Item', BOILERPRESS_TEXT_DOMAIN ),
            'add_new_item'               => __( 'Add New Item', BOILERPRESS_TEXT_DOMAIN ),
            'not_found'                  => __( 'No writers found.', BOILERPRESS_TEXT_DOMAIN ),
            'menu_name'                  => __( 'Example taxonomy', BOILERPRESS_TEXT_DOMAIN ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'example-tax' ),
        );
    
        register_taxonomy( 'example_tax', 'example_cpt', $args );

    }
}

// add_action( 'init', __NAMESPACE__ . '\\custom_taxonomy_register' );

