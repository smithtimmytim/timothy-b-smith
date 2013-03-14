<div <?php post_class(); ?>>
  <article class="entry">
    <p class="date"><?php the_time('F j, Y');?></p>
    <h2><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

    <?php the_content()?> 
    
  </article><!-- .entry -->
</div>
