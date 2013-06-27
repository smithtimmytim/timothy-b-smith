<div <?php post_class(); ?>>
  <article class="entry">
    <div class="contain">
      <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
      
      <h2><a href="<?php ts_link_url(); ?>"><?php the_title(); ?></a><a href="<?php the_permalink(); ?>" class="link-post icon-alone" title="Permanent Link to <?php the_title_attribute(); ?>"><span aria-hidden="true" data-icon="a"></span><span class="screen-reader-text">Permanent Link</span></a>
      </h2>

      <?php the_content()?> 
    </div><!-- .contain --> 
  </article><!-- .entry -->
</div>
