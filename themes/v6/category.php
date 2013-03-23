<?php get_header() ?>

  <section role="main" class="main-content">
    <div class="contain">

    <h1 class="statement">Posts filed in &lsquo;<?php single_cat_title(); ?>&rsquo;</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; endif; ?>

    <?php wp_pagenavi(); ?>

    </div><!-- end .contain -->
  </section><!-- end .main-content -->

<?php get_footer(); ?>
