<?php get_header(); ?>



  <div class="main-content">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

    <?php get_template_part( 'content', get_post_format() ); ?>

  <?php endwhile; endif; ?>

  <?php wp_pagenavi(); ?>

  </div><!-- .main-content -->

<?php get_footer(); ?>
