<?php get_header();?>

<div class="container item">
	<h6 class="heading"><?php the_title(); ?></h6>
	<p>
	    <?php get_page( $page_id ) ?> 
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</p>
</div>

<?php get_footer();?>