<?php
/*
Template Name: InvestorTemplate
*/
get_header();?>

<div id="investorTemplate">
  <section id="sub-menu">
      <ul>
          <li class="item"><a href="<?= site_url() ?>/corporate-governance/">Corporate Goverance </a></li>
          <li class="item"><a href="<?= site_url() ?>/stock-info/">Stock Info</a></li>
          <li class="item"><a href="<?= site_url() ?>/press-release/">Press Releases</a></li>
          <li class="item"><a href="<?= site_url() ?>/events/">Events & Presentations</a></li>
          <li class="item"><a href="<?= site_url() ?>/financial-reports/">Financial Reports</a></li>
          <li class="item"><a href="<?= site_url() ?>/sec-filings/">SEC Filings</a></li>
        </ul>
  </section>

  <section id="iframe">
    <div class="container">
      <div class="col-sm-12 col-md-12">
        <?php get_page( $page_id ) ?> 
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
</div>
<?php get_footer();?>


