<?php
/*
Template Name: PressTemplate
*/
get_header();?>

<div id="pressTemplate">	
  <section id="sub-menu">
  </section>
	<section id="press">
		<div class="container">
		<div class="hidden-xs">	<? get_sidebar('press'); ?></div>
			<div class="col-sm-12 col-md-9 col-lg-9">
				<div class="press-releases-link" style="margin-top:10px;padding-bottom: 5px;">
					<a class="visible-xs" href="/press-room"> &laquo Back to Press Room</a>
				</div>
				<div class="press-release">
					<h6 class="heading"><?php the_title(); ?></h6>
						<p>
					    <?php get_page( $page_id ) ?> 
    					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    					<?php the_content(); ?>
    					<?php endwhile; endif; ?>
        				</p>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer();?>

