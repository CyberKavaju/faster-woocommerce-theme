<?php get_header(); ?>
<div class="hero">
  <div class="container">
    <!-- insert a widget here (create a hero plugin for the theme)-->
    <?php dynamic_sidebar('herro') ?>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- content here -->
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        <?php endwhile; else: endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?> 