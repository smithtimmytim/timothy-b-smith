<?php get_header() ?>

  <div class="main-content">

    <h1 class="tax-head">Posts tagged &lsquo;<?php single_tag_title(); ?>&rsquo;</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; endif; ?>

    <?php wp_pagenavi(); ?>

  </div><!-- .main-content -->

<?php get_footer(); ?>
