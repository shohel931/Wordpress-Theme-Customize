<?php
// css js files enqueue
function css_js_fils_enqueue(){
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_register_style('bootstrap', get_template_directory_uri(  ). '/css/bootstrap.css', array(), '5.0.2', 'all');
  wp_register_style('custom', get_template_directory_uri(  ). '/css/custom.css', array(), '1.0.0', 'all');
  wp_register_style('page_style', get_template_directory_uri(  ). '/css/page_style.css', array(), '1.0.0', 'all');
  wp_register_style('services_page', get_template_directory_uri(  ). '/css/services_page.css', array(), '1.0.0', 'all');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('custom');
  wp_enqueue_style('page_style');
  wp_enqueue_style('services_page');

//js
wp_enqueue_script('jQuery');
wp_enqueue_script('bootstrap', get_template_directory_uri(  ).'/js/bootstrap.js', array(), '5.0.2', true);
wp_enqueue_script('main', get_template_directory_uri(  ).'/js/main.js', array(), '1.0.0', true);

//Font Aousum CDN Link
wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2', 'all');

}
add_action('wp_enqueue_scripts', 'css_js_fils_enqueue');
