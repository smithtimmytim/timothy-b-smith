<div <?php post_class(); ?>>
  <article class="entry">
    <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
    <h2><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

    <?php the_content()?> 
    
  </article><!-- .entry -->
</div>
