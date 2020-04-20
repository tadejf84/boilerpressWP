<?php
/**
 * Front page page template
 *
 * @package BoilerPressWP
 */

defined( 'ABSPATH' ) || exit;
?>

<main class="main main--home">
    <div class="container">
    
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part( 'template-parts/loop/content-page' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        
    </div>
</main>
