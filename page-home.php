<?php
/**
 *Template Name: Home page
 * @package tamcc
 */

get_header(); ?>
	</div><!-- #content -->

	<?php putRevSlider( "tamcc" ) ?>

	    <section class="main">
            <div class="container">
               
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('infor-1') ) : ?>
		    <?php endif; ?>
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('infor-2') ) : ?>
		    <?php endif; ?>
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('infor-3') ) : ?>
		    <?php endif; ?>
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('infor-4') ) : ?>
		    <?php endif; ?>
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('infor-5') ) : ?>
		    <?php endif; ?>
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('infor-6') ) : ?>
		    <?php endif; ?>
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('infor-7') ) : ?>
		    <?php endif; ?>
                
                <div class="clearfix"></div>
            </div><!-- end of container -->	
	   </section>


	    <section class="spacer">
            <div class="container">
                <h2 class="buy-title">We are ready for you ? Feel free to buy this theme now...</h2>	
                <a class="buy-link" rel="external" href="#"><i class="fa fa-shopping-cart"></i> BUY IT NOW</a>
                <div class="clearfix"></div>
            </div><!-- end of container -->	
	    </section>
	<div><!-- #content -->
<?php get_footer(); ?>