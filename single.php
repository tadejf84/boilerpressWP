<?php
/**
 * Single post template
 *
 * @package BoilerPressWP
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="container">
    <main class="main main--single">

        <?php if( have_posts() ) : ?>

            <?php while( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/loop/content-single' ); ?>
            <?php endwhile; ?>

            <?php BoilerPress\Nav\post_navigation(); // post navigation ?>

            <?php
            // If comments are open and there is at least 1 comment, show comment templates
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
            ?>
        <?php endif; ?>

    </main>
</div>
