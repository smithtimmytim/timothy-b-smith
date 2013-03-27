<div class="video-pusher"><?php echo get_post_meta($post->ID, 'video-embed', true); ?></div>

<article class="entry">
  <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
  
  <h2><?php the_title(); ?></h2>

  <?php the_content('Read More') ?>

  <ul class="meta_info">
    <li class="previous-post"><?php previous_post_link('%link', '<span aria-hidden="true" data-icon="r"></span><span class="screen-reader-text">Previous Post</span>'); ?></li>
    <li class="next-post"><?php next_post_link('%link', '<span aria-hidden="true" data-icon="l"></span><span class="screen-reader-text">Next Post</span>'); ?></li>
    <li><?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?></li>
    <li><?php the_tags('#', ' #'); ?></li>
  </ul>

</article> <!-- end .entry -->