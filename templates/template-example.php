<?php
/**
 * Example template
 *
 * Template Name: Example
 * 
 * @package BoilerPressWP
 */
?>

<main class="main">
    <div class="container">
        
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part( 'template-parts/loop/content-page' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>

	</div>
</main>


