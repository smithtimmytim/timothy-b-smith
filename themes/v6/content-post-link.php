 <article class="entry">     
    <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
    
    <h2><a href="<?php ts_link_url(); ?>"><?php the_title(); ?></a><a href="<?php the_permalink(); ?>" class="link-post icon-alone" title="Permanent Link to <?php the_title_attribute(); ?>"><span aria-hidden="true" data-icon="a"></span><span class="screen-reader-text">Permanent Link</span></a>
    </h2>

    <?php the_content('Read More') ?>

    <ul class="meta_info">
    <li><?php previous_post_link('%link', 'Prev');?> <?php next_post_link('%link', '&middot; Next'); ?></li>
    <li><?php the_tags('#', ' #'); ?></li>
    </ul>

  </article> <!-- end .entry -->

<div class="comments">
  <?php comments_template(); ?>
</div><!-- .comments -->
