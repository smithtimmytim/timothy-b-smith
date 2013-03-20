  <article class="entry content">
    <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
    <h2><?php the_title(); ?></h2>

    <?php the_content(); ?>

    <ul class="meta_info">
    <li><?php previous_post_link('%link', 'Prev');?> <?php next_post_link('%link', '&middot; Next'); ?></li>
    <li><?php the_tags('#', ' #'); ?></li>
    </ul>

  </article> <!-- end .entry -->

<div class="comments">
  <?php comments_template(); ?>
</div><!-- .comments --> 
