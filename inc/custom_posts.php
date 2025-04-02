<?php



function custom_slider(){
  register_post_type('slider',
  array(
    'labels' => array(
      'name' =>('Slider'),
      'singular_name' =>('slider'),
      'add_new' =>('Add New'),
      'add_new_item' =>('Add New Slider'),
      'edit_item' =>('Edit Slider'),
      'new_item' =>('New Slider'),
      'view_item' =>('View Slider'),
      'not_found' =>('No Slider Found'),
    ),
    'menu_icon' => 'dashicons-slides',
    'public' => true, 
    'has_archive' => true,
    'menu_position' => 5,
    'hierarchical' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'slider'),
    'supports' => array('title',  'editor', 'thumbnail', 'excerpt', 'page-attributes'),
    'taxonomies' => array('category', 'post_tag'),
    'exclude_from_search' => false,
    'publicly_queryable' => true,

    )
  );
}
add_action('init', 'custom_slider');