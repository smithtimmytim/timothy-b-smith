<?php get_header(); ?>

<section role="main" class="main-content projects">
    <div class="module">
      <div class="contain">
        <h1 class="statement">Portfolio</h1>
      </div>
    </div>

    <div class="entry">
      <div class="contain">
        <p>I’m a Designer and Front-End Developer with extensive experience designing user interfaces and websites.</p>
      </div><!-- .contain -->
    </div><!-- end .entry -->

<?php 
    $the_query = new WP_Query(array(
      'post_type' => 'case-studies',
      'posts_per_page' => -1   
    )); 
  ?>

  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


        <div class="entry">
          <div class="contain">
            <?php the_post_thumbnail( 'portfolio-thumb' ); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt (); ?>
            <p><a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>">View Project &rarr;</a></p>
          </div><!-- .contain -->
        </div> <!-- end .entry -->

    <?php endwhile; ?>

    <div class="cta">  
      <div class="contain">
        <p>Like what you see?<br><a href="/contact">Tell me about your project</a></p>
      </div><!-- .contain -->
    </div>

</section>
<?php get_footer()?>
