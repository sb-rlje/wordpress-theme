<?php
/*
Template Name: BrandTemplate
*/
get_header();?>

<div id="brandTemplate">	
	<section id="brands">
		<?php $post_meta = get_post_meta(get_the_ID(), 'brand-first', true);
		if (!empty($post_meta)) {?>
			<div class="container item">
				<div class="col-md-4 col-lg-4 image">
					<img src="<?php bloginfo('template_directory'); ?>/img/<?= get_post_meta(get_the_ID(), 'brand-first-id', true); ?>.png"/>
				</div>
				<div class="col-sm-12 col-md-8 col-lg-8 copy">
					<h6 class="heading"><?= get_post_meta(get_the_ID(), 'brand-first', true); ?></h6>
					<p><?= get_post_meta(get_the_ID(), 'brand-first-desc', true); ?></p>
					<a href="<?= get_post_meta(get_the_ID(), 'brand-first-link', true); ?>"><button type="button" class="btn btn-primary">Visit <?= get_post_meta(get_the_ID(), 'brand-first', true); ?></button></a>
				</div>
			</div>
		<?php } ?>

	</section>
</div>

<?php get_footer();?>