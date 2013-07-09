<?php get_header(); ?>

  <section role="main" class="main-content">
    
    <div class="module">
      <div class="contain">
        <h1 class="statement">Search Results For: <?php the_search_query(); ?></h1>
      </div>
    </div>



    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; ?>
    
    <?php else: ?>

    <div class="content">
      <div class="contain">
        <p>Sorry homie, I couldn’t find anything. Try another search?</p>
      </div>
    </div>

    <?php endif; ?>
    
    <div class="contain">
      <?php wp_pagenavi(); ?>
    </div><!-- .contain -->

  </section><!-- .main-content -->

<?php get_footer(); ?>
