<?php
/**
 * Index template
 * 
 * @package BoilerPressWP
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<main class="main main--index">
    <div class="container">

        <header class="page-header">
            <h1><?php the_archive_title(); ?></h1>
            <p><?php the_archive_description(); ?></p>
        </header>

        <?php if(!have_posts()) : ?>
            <?php get_template_part( 'template-parts/loop/content-empty' ); ?>
        <?php else : ?>
            <div class="row">
                <?php while(have_posts()) : the_post(); ?>
                    <div class="col-lg-4">
                        <?php get_template_part( 'template-parts/loop/content-index' ); ?>
                    </div>
                <?php endwhile; ?>
            </div>

            <?php BoilerPress\Nav\archive_pagination(); // pagination component ?>
        <?php endif; ?>
        
    </div>
</main>

