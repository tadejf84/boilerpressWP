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
            'name'                => _x( 'Example', 'Post Type General Name', 'boilerpress' ),
            'singular_name'       => _x( 'Example', 'Post Type Singular Name', 'boilerpress' ),
            'menu_name'           => __( 'Examples', 'boilerpress' ),
            'parent_item_colon'   => __( 'Parent Item', 'boilerpress' ),
            'all_items'           => __( 'All Items', 'boilerpress' ),
            'view_item'           => __( 'View Items', 'boilerpress' ),
            'add_new_item'        => __( 'Add New Item', 'boilerpress' ),
            'add_new'             => __( 'Add New', 'boilerpress' ),
            'edit_item'           => __( 'Edit', 'boilerpress' ),
            'update_item'         => __( 'Update', 'boilerpress' ),
            'search_items'        => __( 'Search', 'boilerpress' ),
            'not_found'           => __( 'Not found', 'boilerpress' ),
            'not_found_in_trash'  => __( 'Not found in trash', 'boilerpress' ),
        );
        $args = array(
            'label'               => __( 'Example', 'boilerpress' ),
            'description'         => __( 'Description', 'boilerpress' ),
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

//add_action( 'init', __NAMESPACE__ . '\\custom_post_type_register' );


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
            'name'                       => _x( 'Example taxonomy', 'taxonomy general name', 'boilerpress' ),
            'singular_name'              => _x( 'Example taxonomy', 'taxonomy singular name', 'boilerpress' ),
            'search_items'               => __( 'Search Iems', 'boilerpress' ),
            'popular_items'              => __( 'Popular Items', 'boilerpress' ),
            'all_items'                  => __( 'All Items', 'boilerpress' ),
            'parent_item'                => __( 'Parent Item', 'boilerpress' ),
            'parent_item_colon'          => __( 'Parent Item: ', 'boilerpress' ),
            'edit_item'                  => __( 'Edit Item', 'boilerpress' ),
            'update_item'                => __( 'Update Item', 'boilerpress' ),
            'add_new_item'               => __( 'Add New Item', 'boilerpress' ),
            'not_found'                  => __( 'No writers found.', 'boilerpress' ),
            'menu_name'                  => __( 'Example taxonomy', 'boilerpress' ),
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

//add_action( 'init', __NAMESPACE__ . '\\custom_taxonomy_register' );

