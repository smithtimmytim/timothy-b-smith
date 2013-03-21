<?php
/*
Template Name: Portfolio Index
*/
?>
<?php get_header(); ?>

<section role="main" class="main-content projects">
  <div class="contain"> 

    <div class="entry">     
      <h2 class="statement">What Can I Do?</h2>
      <p>I'm based in beautiful Saint Paul, Minnesota and I work with a variety of clients anywhere in the world. I specialize in Web and User Interface Design and I know HTML, CSS, SCSS, and WordPress.</p>
    </div><!-- end .entry -->

  <?php

    $args = array(
        'post_type' => 'page',
        'posts_per_page' => 10,
        'post_parent' => 762
      );

      $query = new WP_Query ($args);

      while ( $query->have_posts() ) : $query->
        the_post(); ?>


        <div class="entry">
          <?php the_post_thumbnail( 'portfolio-thumb' ); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt (); ?>
          <p><a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>">View Project &rarr;</a></p>
        </div> <!-- end .entry -->

    <?php endwhile; ?>

    <div class="cta">  
      <p>Like what you see? Start your next project with me. <a href="/contact">Let's talk</a>.</p>
    </div>

  </div> <!-- end .contain -->
</section>
<?php get_footer()?>
