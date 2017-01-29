<?php
/*
Template Name: ManagementTemplate
*/
get_header();?>

<div id="leadershipTemplate">	
	<section id="sub-menu">
	</section>
	<section id="leadership">
		<div class="container item">
			<div class="hidden-xs">	<? get_sidebar('management'); ?></div>
			<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 image">
				<a class="visible-xs" href="/management"> &laquo Back to Management</a>
				<img src="<?php bloginfo('template_directory'); ?>/img/<?= get_post_meta(get_the_ID(), 'member-id', true); ?>.jpg"/>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 copy">
				<h6 class="heading"><?php the_title(); ?> - <?= get_post_meta(get_the_ID(), 'title', true); ?></h6>
				<p>
			    <?php get_page( $page_id ) ?> 
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
				</p>
			</div>
		</div>
	</section>
</div>

<?php get_footer();?>
