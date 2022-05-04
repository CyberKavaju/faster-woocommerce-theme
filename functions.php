<?php
function load_stylesheets() {
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', '', 1, 'all');
  wp_enqueue_style('bootstrap');
  wp_register_style('custom', get_template_directory_uri() . '/css/style.css', '', 1, 'all');
  wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript() {
  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
  wp_enqueue_script('bootstrap');
  wp_register_script('custom', get_template_directory_uri() . '/js/app.js', '', 1, true);
  wp_enqueue_script('custom');
} 
add_action('wp_enqueue_scripts', 'load_javascript');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'extra-menu' => __('Extra Menu'),
      'mobile-menu' => __('Mobile Menu')
    )
  );
}
add_action('init', 'register_my_menus');


function faster_custom_logo_setup()
{
  add_theme_support('custom-logo', array(
    'height' => 100,
    'width' => 400,
    'flex-width' => true,
    'flex-height' => true,
  ));
}
add_action('after_setup_theme', 'faster_custom_logo_setup');
//add sopport  
add_theme_support('post-thumbnails');
//add image sizes
add_image_size('post_image', 1000, 600, true);
//add widgets
function herro_position() {
  register_sidebar( array(
    'name'          => 'Herro',
    'id'            => 'herro',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'herro_position' );