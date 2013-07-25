 <article class="entry content"> 
  <div class="contain">    
    <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
    
    <?php if( get_field('link_post_url') ) : ?>
    <h2><a href="<?php the_field('link_post_url'); ?>"><?php the_title(); ?></a></h2>
    
    <?php else : ?>
    <h2><a href="<?php ts_link_url(); ?>"><?php the_title(); ?></a></h2>
    
    <?php endif; ?>

    <?php the_content(); ?>

    <?php if (get_field('show_like_button')) : ?>
      <div class="post-footer">
        <small class="rcmd-btn"><?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?></small>
      </div>
    <?php else : ?>

    <?php endif; ?>
    </div><!-- .contain -->
  </article> <!-- end .entry -->

