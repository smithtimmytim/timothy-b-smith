  <article class="entry content">
    <p class="date"><?php the_time('F j, Y');?></p>
    <h2><?php the_title(); ?></h2>

    <?php the_content('Read More') ?>

    <ul class="meta_info">
    <li><?php previous_post_link('%link', 'Prev');?> <?php next_post_link('%link', '&middot; Next'); ?></li>
    <li><?php the_tags('#', ' #'); ?></li>
    </ul>

  </article> <!-- end .entry -->
</div>

<div class="comments">
  <?php comments_template(); ?>
</div><!-- .comments --> 
