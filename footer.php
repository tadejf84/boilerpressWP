<?php
/**
 * Site footer template
 * 
 * @package BoilerPressWP
 */

defined( 'ABSPATH' ) || exit;
?>

<footer class="site-footer">
    <div class="container">
        <section class="site-footer__copy">
            <p>Copyright © <?php the_date( 'Y' ); ?> BoilerPressWP</p>
        </section>
    </div>
</footer>

<?php wp_footer(); ?>