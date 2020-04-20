<?php
/**
 * Default page template
 *
 * @package BoilerPressWP
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="container">
    <main class="main main--pages">

        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part( 'template-parts/loop/content-page' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </main>
</div>
    
