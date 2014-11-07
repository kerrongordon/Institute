<?php
/**
 *Template Name: Home page
 * @package tamcc
 */
get_header(); ?>
</div><!-- #content -->
	
	
	<!--<?php if ( get_header_image() ) : ?>
		<div class="hero" style="background: url(<?php header_image(); ?>);background-repeat: no-repeat;background-repeat: no-repeat; -moz-background-size: cover; -o-background-size: cover; -webkit-background-size: cover; background-size: cover; background-position: 50% 50%;">
			
			<div class="hero-title">
				<h1 class="wow zoomInUp">
					<?php echo get_bloginfo ( 'description' );  ?>
				</h1>
			</div>
		</div>
	<?php endif; // End header image check. ?>-->		
	
		
		<section class="main">
			<!--<div class="container">-->
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-header">
						
					</div><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'tamcc' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
					<footer class="entry-footer">
						<?php edit_post_link( __( 'Edit', 'tamcc' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>
			<div class="clearfix"></div>
			<!--</div>--><!-- #content -->
		</section>
	<div class="container">
<?php get_footer(); ?>