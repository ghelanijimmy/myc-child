<?php
/*template name: RDR Sidebar - Left*/
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
          if(current_user_can('rdr_customer') || current_user_can('rdr_customer_on_account') || current_user_can('rdr_super_customer') || current_user_can('administrator')){
           the_content();
         } else {
           echo 'Sorry, you do not have sufficient access privileges to this page';
         }
				endwhile; endif;
        ?>

			</div><!--/span_9-->
			<?php
				if(current_user_can('esso-french-on-account') || current_user_can('esso-french') || current_user_can('administrator')){
					echo '<div id="sidebar" class="col span_3 left-sidebar"';
					get_sidebar('rdr');
					echo '</div>';
				}
			?>


		</div><!--/row-->

	</div><!--/container-->

</div><!--/container-wrap-->

<?php get_footer(); ?>
