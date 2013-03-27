 <article class="entry">     
    <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
    
    <h2><a href="<?php ts_link_url(); ?>"><?php the_title(); ?></a></h2>

    <?php the_content('Read More') ?>

    <ul class="meta_info">
    <?php previous_post_link('<li class="previous-post">%link</li>', '<span aria-hidden="true" data-icon="r"></span><span class="screen-reader-text">Previous Post</span>'); ?>
    <?php next_post_link('<li class="next-post">%link</li>', '<span aria-hidden="true" data-icon="l"></span><span class="screen-reader-text">Next Post</span>'); ?>
    <li class="rcmd-btn"><?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?></li>
    <li class="the_tags"><?php the_tags('#', ' #'); ?></li>
    </ul>


  </article> <!-- end .entry -->

