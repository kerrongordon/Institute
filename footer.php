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
	        <p>Copyright &copy; <?php echo date(" Y "); ?> | T.A. Marryshow Community College <br>
	         <?php printf( __( 'Design: %1$s by %2$s.', 'tamcc' ), '', '<a href="https://plus.google.com/u/0/+kerrongordon/posts" rel="designer" target="_blank">Kerron Gordon</a>' ); ?></p>
	    </div><!-- end of container -->	
	</section>

</div><!-- #page -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=SET_TO_TRUE_OR_FALSE"></script>
        <script type="text/javascript">
			var templateUrlPng = '<?= get_bloginfo("template_url"); ?>/assets/img/cd-icon-location.png';
			var templateUrlSvg = '<?= get_bloginfo("template_url"); ?>/assets/img/cd-icon-location.svg';
		</script>

<?php wp_footer(); ?>

</body>
</html>
