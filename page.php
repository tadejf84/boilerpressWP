<?php
/**
 * Default page template
 *
 * @package BoilerPressWP
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<main class="main main--pages">
    <div class="container">

        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part( 'template-parts/loop/content-page' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        
    </div>
</main>

    
