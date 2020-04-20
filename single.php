<?php
/**
 * Single page template
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
            <?php BoilerPress\Nav\post_navigation(); ?>
        <?php endif; ?>

    </main>
</div>
