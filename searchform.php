<?php
/**
 * Search form template
 * 
 * @package BoilerPressWP
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <label class="sr-only" for="s"><?php esc_html_e( 'Search', 'boilerpress' ); ?></label>
    <div class="input-group d-flex">
        <input class="field form-control" id="s" name="s" type="text" placeholder="<?php esc_attr_e( 'Search &hellip;', 'boilerpress' ); ?>" value="<?php the_search_query(); ?>">
        <input class="submit btn btn--primary" id="searchsubmit" name="submit" type="submit" value="<?php esc_attr_e( 'Search', 'boilerpress' ); ?>">
    </div>
</form>
