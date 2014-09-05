<?php
/**
 *Template Name: Home page
 * @package tamcc
 */
get_header(); ?>


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

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

	


<?php get_footer(); ?>