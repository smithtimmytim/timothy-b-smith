<div class="video-pusher"><?php echo get_post_meta($post->ID, 'video-embed', true); ?></div>

<article class="entry">
  <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
  
  <h2><?php the_title(); ?></h2>

  <?php the_content('Read More') ?>

  <ul class="meta_info">
  <li><?php previous_post_link('%link &middot;', 'Previous'); ?> <?php next_post_link('%link', 'Next'); ?></li>
  <li><?php the_tags('#', ' #'); ?></li>
  </ul>

  <div class="recommend-btn">
    <?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?>
  </div><!-- end .recommend-btn -->

</article> <!-- end .entry -->