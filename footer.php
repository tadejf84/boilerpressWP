<?php
/**
 * Site footer template
 * 
 * @package BoilerPressWP
 */

defined( 'ABSPATH' ) || exit;
?>

<footer class="site-footer">
    <section class="site-footer__copy">
        <p>Copyright © <?php the_date( 'Y' ); ?> BoilerPressWP</p>
    </section>
</footer>

<?php wp_footer(); ?>