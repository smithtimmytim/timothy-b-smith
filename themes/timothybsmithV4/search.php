<?php get_header() ?>
 
 <div class="main-content">
   
   <h1 class="tax-head">Search Results</h1>
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
 
      
        <div class="entry" <?php post_class(); ?>>
      <p class="date"><?php the_time('F j, Y');?></p>
      <h2><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><small class="link-post"><?php ts_link_url(); ?></small></h2>
      
    </div><!-- .entry --> 
 
     <?php endwhile;?>
     
     <?php else : ?>

      <p>No posts found. Try a different search?</p>

    <?php endif; ?>
    
</div><!-- .main-content -->

<?php get_footer(); ?>
