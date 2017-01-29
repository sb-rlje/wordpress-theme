<?php
/*
Template Name: ManagementArchiveTemplate
*/
get_header();?>

<div id="leadershipTemplate">	
	<section id="leadership">
	 		<div class="container">
			<? get_sidebar('management'); ?>
 			<div class="hidden-xs col-sm-8 col-md-9 col-lg-9">
			<?php 
			  $post_type = 'page';
			  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			  $args=array( 'post_type' => $post_type, 'posts_per_page'   => 100, 'post_status' => 'publish', 'paged' => $paged,'category_name' => 'management',);
			  $my_query = null;
			  $my_query = new WP_Query($args);
			  if( $my_query->have_posts() ) {
			  while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="clearfix member">
				<div class="col-sm-3 col-md-3 col-lg-3 image">
					<img src="<?php bloginfo('template_directory'); ?>/img/<?= get_post_meta(get_the_ID(), 'member-id', true); ?>.jpg"/>
				</div>
				<div class="col-sm-9 col-md-9 col-lg-9 copy">

					<h6 class="heading"><?php the_title(); ?> - <?= get_post_meta(get_the_ID(), 'title', true); ?></h6>
					<p>
					<?php $my_excerpt = get_the_excerpt();
						echo $my_excerpt; ?>
	
					</p>
				</div>
			</div>

				<?php endwhile; } wp_reset_query(); ?>
				</div></div>
	</section>
</div>

<?php get_footer();?>
