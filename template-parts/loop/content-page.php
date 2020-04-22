<?php
/**
 * Default page article content
 *
 * @package BoilerPressWP
 */

defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('article-page'); ?> id="post-<?php the_ID(); ?>">

    <header class="article-page__header">
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
        <h1 class="article-page__title"><?php the_title(); ?></h1>
    </header>

    <div class="article-page__content">
        <?php the_content(); ?>
    </div>

</article>