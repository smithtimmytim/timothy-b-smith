<div <?php post_class(); ?>>
  <article class="entry">
    <div class="contain">
      <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
      <h2><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

      <?php the_content(); ?>

      <?php
                  if(get_field('post_thanks')): ?>
      
      <hr>
      <div class="post-helpers">
        <small><strong class="post-thanks" data-tooltip="The following people helped me with this post.">Thanks to:</strong></small>
        <small>
        <?php while(has_sub_field('post_thanks')): ?>
          <a href="<?php the_sub_field('thanks_person_url'); ?>"><?php the_sub_field('thanks_person_name'); ?></a> 
        <?php endwhile; ?>
        </small>
      </div><!-- end .post-helpers -->
      <?php endif; ?>
   </div><!-- .contain --> 
  </article><!-- .entry -->
</div>
