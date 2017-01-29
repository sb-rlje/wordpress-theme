<div class="col-sm-12 col-md-3 col-lg-3">
	<div class="press-contact">
		<h6 class="heading">Contact</h6>
			<p>Sample copy </p>
	</div>
	<div class="press-releases-link">
		<h6 class="heading">Press Releases</h6>
		  <?php 
		  $post_type = 'page';
		  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		  $args=array( 'post_type' => $post_type, 'posts_per_page'   => 100, 'post_status' => 'publish', 'paged' => $paged,'category_name' => 'press-release',);
		  $my_query = null;
		  $my_query = new WP_Query($args);
		  if( $my_query->have_posts() ) {
		  while ($my_query->have_posts()) : $my_query->the_post(); ?>
			  	<li class="clearfix">
						<a class="clearfix" href="<?php the_permalink() ?>"><?php the_title(); ?> </a>
						<p class="entry-date"><?php echo get_the_date(); ?></p>
					</li>
		  <?php endwhile; } wp_reset_query(); ?>
	</div>
</div>
