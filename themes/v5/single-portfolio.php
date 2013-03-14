<?php
/*
Template Name: Single Portfolio
*/
?>
<?php get_header(); ?>

<section class="work-full">
  <div class="wrap">
    <?php $image = get_post_meta($post->ID, 'full-portfolio-image', TRUE); ?>
      <?php if($image) { ?><img src="<?php echo $image; ?>" alt="Portfolio Image for <?php the_title(); ?>" />
    <?php } ?>
  </div><!-- end .wrap -->

</section>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="main-content">  
  <div class="entry">
    
    <h2><?php the_title(); ?><small><?php echo get_post_meta($post->ID, 'project-class', true); ?> Project</small> </h2>
    <ul class="project-info">
      <li><strong>Role:</strong> <?php echo get_post_meta($post->ID, 'project-role', true); ?></li>
      <li><strong>Type:</strong> <?php echo get_post_meta($post->ID, 'project-type', true); ?></li>
      <?php 
    $url = get_post_meta($post->ID, 'project-URL', true); 

      if ($url) {
          echo "<li><a href='$url'>Visit Project</a></li>";
      }
    ?>
    </ul>

    <?php the_content(); ?>

    <?php next_post_link('<p class="next-one">On to the next one! %link </p>'); ?>
    



  </div><!-- end .entry -->








  <?php endwhile; endif; ?>


</div><!-- end .main-content -->

<div class="cta">
  
  <p>Like what you see? Start your next project with me. <a href="/contact">Let's talk</a>.</p>

</div>
<?php get_footer() ?>