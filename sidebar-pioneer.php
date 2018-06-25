<?php if ( function_exists('dynamic_sidebar')) {

	global $post;
	global $woocommerce;

	$posttype = get_post_type($post);

	 dynamic_sidebar('page-sidebar-pioneer');

} ?>
