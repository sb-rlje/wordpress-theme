<?php get_header();?>


<div id="homeTemplate">	
	<section id="sub-menu">
			<ul>
				<li class="item"><a href="<?= site_url() ?>/sample-link">Sample copy</a></li>
				<li class="item"><a href="<?= site_url() ?>/sample-link/">Sample copy</a></li>
				<li class="item"><a href="<?= site_url() ?>/sample-link/">Sample copy</a></li>
				<li class="item"><a href="<?= site_url() ?>/sample-link/">Sample copy</a></li>
				<li class="item"><a href="<?= site_url() ?>/sample-link/">Sample copy</a></li>
			</ul>
	</section>
	<section id="mission">
		<div class="container">
			<div class="hidden-xs hidden-sm col-md-4 col-lg-4 image">
				<img src="<?php bloginfo('template_directory'); ?>/img/bob-johnson.jpg" width="100%"/>
			</div>

			<div class="col-sm-12 col-md-8 col-lg-8 copy">
				<h6 class="heading">Our Mission</h6>
				<p>Sample copy</p>
			</div>
		</div>
	</section>
	<section id="contact">
		<div class="container">
			<div class="col-sm-6 col-md-6 col-lg-6">
<!-- 			<img src="http://placehold.it/350x150"> -->
				<h6 class="heading">Contact Us</h6>
				<div class="contact-row clearfix">
						<div class="col-xs-12 col-sm-3 col-md-3 inquery">
							<p><span>Investor Inquiries</span></p>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-9">
							<p></p>
						</div>
				</div>
				<div class="contact-row clearfix">
						<div class="col-xs-12 col-sm-3 col-md-3 inquery">
							<p><span>Media Inquiries</span></p>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-9">
							<p>Sample copy</p>
						</div>
				</div>
				<div class="contact-row clearfix">
						<div class="col-xs-3 col-sm-3 col-md-3 inquery">
							<p><span>Transfer Agent</span></p>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-9">
							<p>Sample copy</p>
					</div>
				</div>
				<div class="clearfix">
						<div class="col-xs-12 col-sm-3 col-md-3 inquery">
							<p><span>Auditors</span></p>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-9">
							<p>Sample copy</p>
						</div>
				</div>

			</div>
			<div class="hidden-xs col-sm-6 col-md-6 col-lg-6">
				<h6 class="heading">Press Room</h6>
					<div class="press-releases-link">
						<div class="col-sm-12 col-md-6 col-lg-6">
						  <?php 
							  $post_type = 'page';
							  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							  $args=array( 'post_type' => $post_type, 'posts_per_page'   => 4, 'post_status' => 'publish', 'paged' => $paged,'category_name' => 'press-release',);
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

						  <div class="col-sm-12 col-md-6 col-lg-6">
							  <?php 
							  $post_type = 'page';
							  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							  $args=array( 'post_type' => $post_type, 'posts_per_page'   => 4, 'offset' => 4, 'post_status' => 'publish', 'paged' => $paged,'category_name' => 'press-release',);
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
			</div>


		</div>
	</section>


</div>

<?php get_footer();?>
