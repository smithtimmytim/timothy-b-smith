<?php get_header(); ?>

<div class="main-content">
    
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

    <div class="entry" <?php post_class(); ?>
      <p class="date"><?php the_time('F j, Y');?></p>
      <h2><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><small class="link-post"><?php ts_link_url(); ?></small></h2>

      <?php the_content()?>
      
      <ul class="meta_info">
        <li>Tags: <?php the_tags('#', ' #'); ?></li>
      </ul>     
      
    </div><!-- .entry --> 

  <?php endwhile; endif; ?>
  
  <?php wp_pagenavi(); ?>
  
  </div><!-- .main-content -->
  <?php get_footer(); ?>
