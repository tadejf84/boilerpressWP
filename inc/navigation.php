<?php
/**
 * Navigation functions
 * 
 * @package BoilerPressWP
 */

namespace BoilerPress\Nav;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Create custom pagination
 * 
 */
if ( ! function_exists( 'archive_pagination' ) ) {

	function archive_pagination() {

		// If there is only 1 page, don't show pagination
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) return;

		// Pagination params
		$args = array(
			'mid_size'           => 2,
			'prev_next'          => true,
			'prev_text'          => __( '&laquo;', 'boilerpress' ),
			'next_text'          => __( '&raquo;', 'boilerpress' ),
			'type'               => 'array',
			'current'            => max( 1, get_query_var( 'paged' ) ),
			'screen_reader_text' => __( 'Posts navigation', 'boilerpress' )
		);

		// Get pagination links
		$links = paginate_links( $args );

		// If there are no links, don't show pagination
		if ( ! $links ) return;
		?>

		<nav class="pagination">
			<ul class="pagination__list d-flex list-unstyled">
				<?php
				foreach ( $links as $link ) {
					?>
					<li class="pagination__item <?php echo strpos( $link, 'current' ) ? 'current' : ''; ?>">
						<?php echo str_replace( 'page-numbers', 'pagination__link', $link ); ?>
					</li>
					<?php
				}
				?>
			</ul>
		</nav>

		<?php
	}
}


/**
 * Custom post navigation
 * 
 * Prev/next post links
 * 
 */
if ( ! function_exists( 'post_navigation' ) ) {

	function post_navigation() {

		// Get prev/next links
		$prev_link = get_previous_post_link();
		$next_link = get_next_post_link();

		// Don't show post navigation markup if there is no previous/next post
		if ( !$prev_link && !$next_link ) return;
		?>

		<nav class="post-navigation d-flex justify-content-between">
			<?php
			if ( $prev_link ) {
				previous_post_link( '<span class="post-navigation__prev">%link</span>', _x( '&lt;&nbsp;%title', 'Previous post', 'boilerpress' ) );
			}
			if ( $next_link ) {
				next_post_link( '<span class="post-navigation__next">%link</span>', _x( '%title&nbsp;&gt;', 'Next post', 'boilerpress' ) );
			}
			?>
		</nav>

		<?php
	}
}