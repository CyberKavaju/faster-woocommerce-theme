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
          <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
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