<?php
/*
Template Name: Projects
*/
get_header(); ?>

<div class="main-content projects">
    
<?php

$args = array( 'post_type' => 'projects', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
<div class="entry" <?php post_class(); ?>>

      <img src="<?php custom_field('project_image'); ?>" alt="Project Image" />
      <h5><?php the_title(); ?> <small>//<?php custom_field('project_date'); ?></small></h5>

      <?php the_excerpt()?>

      <p><a class="butt" href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>">Read More &rarr;</a>
      
    </div><!-- .entry --> 

<?php endwhile; ?>

  </div><!-- .main-content -->
  <?php get_footer(); ?>


