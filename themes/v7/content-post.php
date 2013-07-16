  <? if( is_preview() ) : ?>
  <div class="preview-warning">
    <div class="contain">
      <p><strong>You are viewing a preview of the post <? the_title(); ?>, which will be published soon.</strong></p>
    </div><!-- .contain -->
  </div><!-- .preview-warning -->
  <? endif; ?>

  <article class="entry content">
    <div class="contain">
      
      <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
      <h2><?php the_title(); ?></h2>

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

      <div class="post-footer">
        <small class="rcmd-btn"><?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?></small>
      </div>
    </div><!-- .contain -->
  </article> <!-- end .entry -->