<?php
/**
 * 404 template
 * 
 * @package BoilerPressWP
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<main class="main main--404">
    <div class="container">

        <section class="error-404">
            <h1 class="page-title"><?php esc_html_e( '404', BOILERPRESS_TEXT_DOMAIN ); ?></h1>
            <p><?php esc_html_e( 'Nothing found.', BOILERPRESS_TEXT_DOMAIN ); ?></p>
        </section>

    </div>
</main>