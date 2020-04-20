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
            <div class="row">
                <?php while( have_posts() ) : the_post(); ?>
                    <div class="col-lg-4">
                        <?php get_template_part( 'template-parts/loop/content-single' ); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </main>
</div>
