<?php
/**
 * Single page template content
 *
 * @package BoilerPressWP
 */

defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('article-single'); ?> id="post-<?php the_ID(); ?>">

	<header class="article-single__header">
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		<h1 class="article-single__title"><?php the_title(); ?></h1>
		<?php get_template_part( 'template-parts/article-meta' ); ?>
	</header>

	<div class="article-single__content">
		<?php the_content(); ?>
    </div>

</article>