<?php
/**
 * Archives posts content
 *
 * @package BoilerPressWP
 */

defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('article-index'); ?> id="post-<?php the_ID(); ?>">

	<header class="article-index__header">
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
        <h2 class="article-index__title"><?php the_title(); ?></h2>
        <?php get_template_part( 'template-parts/article-meta' ); ?>
	</header>

	<div class="article-index__content">
		<?php the_excerpt(); ?>
    </div>
    
</article>