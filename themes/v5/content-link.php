<div <?php post_class(); ?>>
  <article class="entry">
    <p class="date"><?php the_time('F j, Y');?></p>
    
    <h2><a href="<?php ts_link_url(); ?>"><?php the_title(); ?></a><a href="<?php the_permalink(); ?>" class="link-post icon-alone" title="Permanent Link to <?php the_title_attribute(); ?>"><span aria-hidden="true" data-icon="a"></span><span class="screen-reader-text">Permanent Link</span></a>
    </h2>

    <?php the_content()?> 
    
  </article><!-- .entry -->
</div>
