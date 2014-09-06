<?php
/**
 * @package tamcc
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<div class="featured-img">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'wpbs-featured-home' ); } ?>
		</div>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php tamcc_posted_on(); ?>
			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<span class="comments-link"><?php comments_popup_link( __( '<i class="fa fa-comments"></i> Leave a comment', 'tamcc' ), __( '<i class="fa fa-comments"></i> 1 Comment', 'tamcc' ), __( '<i class="fa fa-comments"></i> % Comments', 'tamcc' ) ); ?></span>
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'tamcc' ), '<span class="edit-link">', '</span>' ); ?>
			<?php endif; ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->
		
	<div class="entry-content">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'tamcc' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'tamcc' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'tamcc' ) );
				if ( $categories_list && tamcc_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'tamcc' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'tamcc' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'tamcc' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->