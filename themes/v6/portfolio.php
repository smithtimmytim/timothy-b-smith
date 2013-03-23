<?php
/*
Template Name: Portfolio Indexing
*/
?>
<?php get_header(); ?>

<section role="main" class="main-content projects">
  <div class="contain"> 

    <div class="entry">     
      <h2 class="statement">What I Do</h2>
      <p>I'm a Designer and Front-End Developer with extensive experience designing user interfaces and websites.</p>
    </div><!-- end .entry -->

<?php 
    $the_query = new WP_Query(array(
      'post_type' => 'case-studies',
      'posts_per_page' => -1   
    )); 
  ?>

  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


        <div class="entry">
          <?php the_post_thumbnail( 'portfolio-thumb' ); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt (); ?>
          <p><a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>">View Project &rarr;</a></p>
        </div> <!-- end .entry -->

    <?php endwhile; ?>

    <div class="cta">  
      <p>Like what you see?<br><a href="/contact">Tell me more about your project</a>.</p>
    </div>

  </div> <!-- end .contain -->
</section>
<?php get_footer()?>
