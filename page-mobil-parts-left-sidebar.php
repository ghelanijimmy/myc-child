<?php
/*template name: Mobil Parts Sidebar - Left*/
get_header(); ?>

<?php nectar_page_header($post->ID); ?>

<div class="container-wrap">

	<div class="container main-content">

		<div class="row">

			<div class="post-area col span_9 col_last">
				<?php

				//breadcrumbs
				if ( function_exists( 'yoast_breadcrumb' ) && !is_home() && !is_front_page() ){ yoast_breadcrumb('<p id="breadcrumbs">','</p>'); }


				if(have_posts()) : while(have_posts()) : the_post();
          if(current_user_can('mobil_customer') || current_user_can('mobile-customer-on-account') || current_user_can('supercustomer') || current_user_can('administrator')){
           the_content();
         } else {
           echo 'Sorry, you do not have sufficient access privileges to this page';
         }
				endwhile; endif;
        ?>

			</div><!--/span_9-->

			<div id="sidebar" class="col span_3 left-sidebar">
				<?php get_sidebar('mobil-parts'); ?>
			</div><!--/span_9-->


		</div><!--/row-->

	</div><!--/container-->

</div><!--/container-wrap-->

<?php get_footer(); ?>
