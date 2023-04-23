<?php
/**
 * Widgets
 *
 * @package BoilerPressWP
 * 
 */

namespace BoilerPress\Widgets;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Init widgets
 * 
 */
if ( ! function_exists( 'widgets_init' ) ) {

    function widgets_init() {
        /**
         * Example widget
         * 
         * Change details to your own
         */
        register_sidebar(
            array(
                'name'          => __( 'Example Widget', BOILERPRESS_TEXT_DOMAIN ),
                'id'            => 'example-widget',
                'description'   => __( 'Your widget description goes here', BOILERPRESS_TEXT_DOMAIN ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget__title">',
                'after_title'   => '</h3>',
            )
        );
    }

} 

//add_action( 'widgets_init', __NAMESPACE__ . '\\widgets_init' );

