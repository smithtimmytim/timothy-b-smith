<?php get_header(); ?>



  <section role="main" class="main-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; endif; ?>
    
    <div class="contain">
      <?php wp_pagenavi(); ?>
    </div><!-- .contain -->

  </section><!-- .main-content -->

<?php get_footer(); ?>
