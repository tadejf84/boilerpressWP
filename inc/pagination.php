<?php
namespace BoilerPress\Pagination;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'pagination' ) ) {

	function pagination( $args = array() ) {

		if ( ! isset( $args['total'] ) && $GLOBALS['wp_query']->max_num_pages <= 1 ) {
			return;
		}

		$args = wp_parse_args(
			$args,
			array(
				'mid_size'           => 2,
				'prev_next'          => true,
				'prev_text'          => __( '&laquo;', 'boilerpress' ),
				'next_text'          => __( '&raquo;', 'boilerpress' ),
				'type'               => 'array',
				'current'            => max( 1, get_query_var( 'paged' ) ),
				'screen_reader_text' => __( 'Posts navigation', 'boilerpress' ),
			)
		);

		$links = paginate_links( $args );
		if ( ! $links ) {
			return;
		}

		?>

		<nav class="pagination">
			<ul class="pagination__list">
				<?php
				foreach ( $links as $key => $link ) {
					?>
					<li class="pagination__item <?php echo strpos( $link, 'current' ) ? 'current' : ''; ?>">
						<?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>
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
 * Display navigation to next/previous post when applicable.
 * 
 */
if ( ! function_exists( 'post_navigation' ) ) {

	function post_navigation() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
		?>

		<nav class="post-navigation d-flex justify-content-between">
			<?php
			if ( get_previous_post_link() ) {
				previous_post_link( '<span class="post-navigation__prev">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'boilerpress' ) );
			}
			if ( get_next_post_link() ) {
				next_post_link( '<span class="post-navigation__next">%link</span>', _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'boilerpress' ) );
			}
			?>
		</nav>

		<?php
	}
}