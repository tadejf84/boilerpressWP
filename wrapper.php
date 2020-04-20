<?php
/**
 * Wrapper template
 * 
 * Wraps all templates
 * 
 * @package BoilerPressWP
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="site-wrapper">
            
        <?php get_header(); // header ?>

        <?php include BoilerPress\Wrapper\template_path(); // main content ?>
        
        <?php get_footer(); // footer ?>

    </div>

</body>

</html>