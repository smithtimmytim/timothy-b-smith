 <article class="entry">     
    <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
    
    <h2><a href="<?php ts_link_url(); ?>"><?php the_title(); ?></a></h2>

    <?php the_content('Read More') ?>

    <?php if (get_field('show_like_button')) : ?>
      <div class="post-footer">
        <small class="rcmd-btn"><?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?></small>
      </div>
    <?php else : ?>

    <?php endif; ?>

  </article> <!-- end .entry -->

