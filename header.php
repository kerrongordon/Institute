<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package tamcc
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<section class="menu-bar">
        <div class="container">
            <div class="logo-bar">
                <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            </div>
                <nav id="site-navigation" class="main-navigation main-menu" role="navigation">
                    <button class="menu-toggle"><?php _e( '<i class="fa fa-bars fa-3x"></i>', 'tamcc' ); ?></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </nav>
            <div class="clearfix"></div>
        </div><!-- container -->
    </section><!-- menu-bar -->

	<section class="spacer">
        <div class="container">
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            <div><span class="yourare">You Are Here: </span><?php the_breadcrumb(); ?></div>
            <div class="clearfix"></div>
        </div><!-- end of container -->	
	</section>

	<div id="content" class="site-content container">
