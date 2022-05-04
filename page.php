<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- content here -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <img src="<?php the_post_thumbnail_url('post_image'); ?>" alt="<?php the_title(); ?>" class="mt-3">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
      <?php endwhile;
      else : endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>