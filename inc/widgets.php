<?php
namespace BoilerPress\Widgets;

/**
 * Widgets init
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'widgets_init', __NAMESPACE__ . '\\widgets_init' );

if ( ! function_exists( 'widgets_init' ) ) {

	/**
	 * Initialize themes widgets.
	 */
	function widgets_init() {

		/**
		 * Example widget
		 * 
		 * Change details to your own
		 */
		// register_sidebar(
		// 	array(
		// 		'name'          => __( 'Example Widget', 'boilerpress' ),
		// 		'id'            => 'example-widget',
		// 		'description'   => __( 'Your widget description goes here', 'boilerpress' ),
		// 		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		// 		'after_widget'  => '</div>',
		// 		'before_title'  => '<h3 class="widget__title">',
		// 		'after_title'   => '</h3>',
		// 	)
		// );

	}
} 
