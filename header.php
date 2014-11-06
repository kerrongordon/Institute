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
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendor/wow.min.js"></script>
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
                    <?php wp_nav_menu (array('theme_location' => 'primary-menu','menu_class' => 'nav'));?>
                </nav>
            <div class="clearfix"></div>
        </div><!-- container -->
    </section><!-- menu-bar -->


    <div class="cat-menu">
        <!--<img src="<?php bloginfo('template_url'); ?>/assets/img/drawing.svg">-->
        <div class="container">
            <?php if ( is_page( 
                        array( 'biological-power', 
                               'biomass-and-biogas', 
                               'cogeneration-or-combined-heat-and-power', 
                               'geothermal-energy', 
                               'hydro-power-or-water-power', 
                               'nuclear-power', 
                               'a-photovoltaic-power-station', 
                               'static-electricity', 
                               'tidal-power', 
                               'waste-to-energy-power', 
                               'wind-power') ) ) { ?>

                <?php wp_nav_menu (array('theme_location' => 'energy-research','menu_class' => 'nav'));?>

            <?php } ?>
        </div>
    </div>


              <?php if ( get_header_image() ) : ?>
                    <div class="hero">
                        
                        <div class="hero-title">
                            <h1 class="wow zoomInUp">
                                <?php echo get_the_title(); ?>
                            </h1>
                        </div>
                    </div>
                <?php endif; // End header image check. ?>  


    <?php if ( is_front_page() ) { ?>
            
    <?php }  else  { ?>

            <section class="spacer">
                <div class="container">
                    <div><span class="yourare" style="color: #fff;">You Are Here: </span><?php the_breadcrumb(); ?></div>
                    <div class="clearfix"></div>
                </div><!-- end of container --> 
            </section>

    <?php  } ?>
    


	<div id="content" class="site-content container">