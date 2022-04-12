<?php 
function load_stylesheets() {
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', '', false, 'all');
  wp_enqueue_style('bootstrap');
  wp_register_style('custom', get_template_directory_uri() . '/css/style.css', '', false, 'all');
  wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');