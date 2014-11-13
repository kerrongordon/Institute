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
<?php if ( is_front_page() ) { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendor/wow.min.js"></script>
<?php } ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<div style="height: 70px"></div>

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

 
                                        

              <?php if ( get_header_image() ) : ?>
                  <div class="hero" style="background: url(<?php header_image(); ?>);
                                             background-repeat: no-repeat; 
                                             -moz-background-size: cover; 
                                             -o-background-size: cover; 
                                             -webkit-background-size: cover; 
                                             background-size: cover; 
                                             background-position: 50% 50%;
                                             ">                         

                       <div class="hero-title">
                            <h1 class="wow zoomInUp">
                                <?php
                                      if ( is_category() ) :
                                        single_cat_title();

                                      elseif ( is_tag() ) :
                                        single_tag_title();

                                      elseif ( is_author() ) :
                                        printf( __( 'Author: %s', 'tamcc' ), '<span class="vcard">' . get_the_author() . '</span>' );

                                      elseif ( is_day() ) :
                                        printf( __( 'Day: %s', 'tamcc' ), '<span>' . get_the_date() . '</span>' );

                                      elseif ( is_month() ) :
                                        printf( __( 'Month: %s', 'tamcc' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'tamcc' ) ) . '</span>' );

                                      elseif ( is_year() ) :
                                        printf( __( 'Year: %s', 'tamcc' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'tamcc' ) ) . '</span>' );

                                      elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                                        _e( 'Asides', 'tamcc' );

                                      elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
                                        _e( 'Galleries', 'tamcc' );

                                      elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                                        _e( 'Images', 'tamcc' );

                                      elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                                        _e( 'Videos', 'tamcc' );

                                      elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                                        _e( 'Quotes', 'tamcc' );

                                      elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                                        _e( 'Links', 'tamcc' );

                                      elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
                                        _e( 'Statuses', 'tamcc' );

                                      elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
                                        _e( 'Audios', 'tamcc' );

                                      elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
                                        _e( 'Chats', 'tamcc' );

                                      elseif ( is_front_page() ) :
                                        echo get_bloginfo ( 'description' );

                                      else :
                                        echo get_the_title();

                                      endif;
                                    ?>
                                 
                            </h1>
                        </div>
                    </div>
                <?php endif; // End header image check. ?>  



  <?php include 'var.php'; ?>

    <div class="cat-menu">
        <div class="container">
            <?php if ( is_page( $energyresearch ) ) { ?>
                <?php wp_nav_menu (array('theme_location' => 'energy-research','menu_class' => 'nav'));?>
            <?php } ?>

            <?php if ( is_page( $solarsolution ) ) { ?>
                <?php wp_nav_menu (array('theme_location' => 'solar-solution','menu_class' => 'nav'));?>
            <?php } ?>

            <?php if ( is_category( $affiliates ) ) { ?>
                <?php wp_nav_menu (array('theme_location' => 'affiliates','menu_class' => 'nav'));?>
            <?php } ?>

            <?php if ( is_category( $renewableEnergyTechnology ) ) { ?>
                <?php wp_nav_menu (array('theme_location' => 'renewable-energy-technology','menu_class' => 'nav'));?>
            <?php } ?>

            <?php if ( is_page( $educationPrograms ) ) { ?>
                <?php wp_nav_menu (array('theme_location' => 'education-programs','menu_class' => 'nav'));?>
            <?php } ?>
        </div>
    </div>





    <?php if ( is_front_page() ) { ?>

            
            
    <?php }  else  { ?>

            <section class="spacer">
                <div class="container">
                    <div><span class="yourare" style="color: #fff;">You Are Here: </span><?php the_breadcrumb(); ?></div>
                    <div class="clearfix"></div>
                </div><!-- end of container --> 
            </section>

    <?php  } ?>
    

<?php if ( is_front_page() ) { ?>  
	<div id="content" class="site-content">
<?php } else { ?>
  <div id="content" class="site-content container">
<?php } ?>