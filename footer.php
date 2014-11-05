<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package tamcc
 */
?>
	<div class="clearfix"></div>
	</div><!-- #content -->
	

	<section class="footer">
		<div class="container">
	        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('fw-1') ) : ?>
		    <?php endif; ?>
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('fw-2') ) : ?>
		    <?php endif; ?>
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('fw-3') ) : ?>
		    <?php endif; ?>
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('fw-4') ) : ?>
		    <?php endif; ?>  
	        <div class="clearfix"></div>
		</div><!-- end of container -->	
	</section>


	<section class="copyright">
		<div class="container">
	        <p>Copyright &copy; <?php get_option( 'date_format' ); ?> | Institute  
	         <?php printf( __( 'Design: %1$s by %2$s.', 'tamcc' ), '', '<a href="https://plus.google.com/u/0/+kerrongordon/posts" rel="designer" target="_blank">Kerron Gordon</a>' ); ?></p>
	    </div><!-- end of container -->	
	</section>

</div><!-- #page -->
<script type="text/javascript">(new WOW).init()</script>
<?php wp_footer(); ?>

</body>
</html>
