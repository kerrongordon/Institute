<?php
/**
 *Template Name: Home page
 * @package tamcc
 */
get_header(); ?>
</div><!-- #content -->
	
	<div>
		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="100%; ?>" height="auto" alt="">
		</a>
		<?php endif; // End header image check. ?>		
	</div>
		
		<section class="main">
			<div class="container">
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
			</div><!-- #content -->
		</section>
	<div class="container">
<?php get_footer(); ?>