<?php get_header() ?>

<section role="main" class="main-content">
  <div <?php post_class(); ?>>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'content-post', get_post_format() ); ?>
      
  <?php endwhile; endif; ?>
  </div><!-- end .post-classes -->

</section> <!-- end .main-content -->
<?php get_footer() ?>


