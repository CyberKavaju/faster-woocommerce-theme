<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faster_py</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class('faster') ?>>
  <header>
    <div class="container">
      <div class="row">
        <div class="col">
          <?php
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
          if (has_custom_logo()) {
            echo '<img src="' . esc_url($logo[0]) . '" class="logo" alt="' . get_bloginfo('name') . '">';
          } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
          }
          ?>
          <h5><?php bloginfo('description'); ?></h5>
        </div>
        <div class="col">
          <nav id="web-menu">
            <?php wp_nav_menu(array(
              'theme_location' => 'header-menu',
              'container_class' => 'header-menu',
              'container_id' => 'header-menu'
            )); ?>
          </nav>
          <nav id="mobile-menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'mobile-menu',
            'container_class' => 'mobile-menu',
            'container_id' => 'mobile-menu'
          )); ?>
          </nav>
        </div>
      </div>
    </div>
  </header>