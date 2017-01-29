<?php

//scripts and styles
function acorn_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css');
  wp_enqueue_style('main', get_template_directory_uri() .'/css/main.css');  
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'acorn_scripts' );

//theme support
add_theme_support('post-thumbnails');

function prefix_remove_menu_pages() {
  remove_menu_page('edit-comments.php');
  remove_menu_page('tools.php');
    // Remove any item you want
  }

add_action( 'admin_menu', 'prefix_remove_menu_pages' );


//add categories to pages
function add_categories_to_franchise() {
      register_taxonomy_for_object_type( 'category', 'page' );
} 

add_action( 'init', 'add_categories_to_franchise' );

function category_in_archives( $wp_query ) {
	$my_post_array = array('post','page');
	if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
      	$wp_query->set( 'post_type', $my_post_array );
  }

// Changing excerpt more
  function new_excerpt_more($more) {
  global $post;
  return '… <a href="'. get_permalink($post->ID) . '">' . 'More &raquo;' . '</a>';
  }

  add_filter('excerpt_more', 'new_excerpt_more');
  add_filter('excerpt_more', 'new_excerpt_more');
  add_action( 'pre_get_posts', 'category_in_archives' );

// add tag support to pages
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');


?>