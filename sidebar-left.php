<?php

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="leftbar" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #leftbar -->

