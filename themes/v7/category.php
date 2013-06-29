<?php get_header() ?>

  <main role="main" class="main-content">

    <div class="module">
      <div class="contain">
        <h1 class="statement">Posts filed in &lsquo;<?php single_cat_title(); ?>&rsquo;</h1>
      </div>
    </div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; endif; ?>

    <div class="contain">
      <?php wp_pagenavi(); ?>
    </div><!-- .contain -->

  </main><!-- end .main-content -->

<?php get_footer(); ?>
