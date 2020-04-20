<?php
/**
 * Site header template
 * 
 * @package BoilerPressWP
 */

defined( 'ABSPATH' ) || exit;
?>

<header class="site-header">

    <div class="container">
        <?php wp_nav_menu(
            array(
                'theme_location'  => 'main-menu',
                'menu_class'      => 'site-header__navigation',
                'menu_id'         => 'main-menu'
            )
        ); ?>
    </div>

</header>