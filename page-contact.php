<?php
/**
 *Template Name: contact page
 * @package tamcc
 */

get_header(); ?>
		<div id="primary" class="">
		<main id="main" class="site-main contact-form-area" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

		<div class="sidebar-r">
			<?php get_sidebar( 'right' ); ?>
		</div>

	</div><!-- #primary -->

<?php get_footer(); ?>