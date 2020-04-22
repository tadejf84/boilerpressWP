<?php
/**
 * Site header template
 * 
 * @package BoilerPressWP
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<header class="site-header">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="site-header__brand">
            <?php if ( ! has_custom_logo() ) : ?>
                <a class="custom-logo-link" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
                    <span><?php bloginfo( 'name' ); ?></span>
                </a>
            <?php else : ?>
                <?php the_custom_logo(); ?>
            <?php endif; ?>
        </div>

        <?php wp_nav_menu(
            array(
                'theme_location'    => 'main-menu',
                'container'         => 'nav',
                'container_class'   => 'site-header__navigation',
                'menu_class'        => 'main-menu d-flex list-unstyled mb-0',
                'menu_id'           => 'main-menu',
            )
        ); ?>

        <?php get_search_form(); ?>

    </div>
</header>