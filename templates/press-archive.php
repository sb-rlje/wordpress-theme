<?php
/*
Template Name: PressArchiveTemplate
*/
get_header();?>

<div id="pressTemplate">	
  <section id="sub-menu">
  </section>
	<section id="press">
		<div class="container">
			<? get_sidebar('press'); ?>
			
			<div class="hidden-xs col-sm-9 col-md-9 col-lg-9">
				<div class="press-release">
						<p>
						  <?php 
						  $post_type = 'page';
						  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						  $args=array( 'post_type' => $post_type, 'posts_per_page'   => 1, 'post_status' => 'publish', 'paged' => $paged,'category_name' => 'press-release',);
						  $my_query = null;
						  $my_query = new WP_Query($args);
						  if( $my_query->have_posts() ) {
						  while ($my_query->have_posts()) : $my_query->the_post(); ?>
						  <h6 class="heading"><?php the_title(); ?></h6>
						  <?php the_content(); ?>
						  <?php endwhile; } wp_reset_query(); ?>
        				</p>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer();?>
