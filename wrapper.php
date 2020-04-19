<?php
/**
 * Wrapper Content
 * Included in all templates
 * 
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

        <main>
            <?php include BoilerPress\Wrapper\template_path(); // main content ?>
        </main>

        <?php get_footer(); // footer ?>

    </div>

</body>

</html>