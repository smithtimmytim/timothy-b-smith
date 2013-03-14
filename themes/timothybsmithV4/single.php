<?php get_header() ?>

 <div class="main-content">      

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
      
      <p class="date"><?php the_time('F j, Y');?></p>
      <h2><?php the_title(); ?><small class="link-post"><?php ts_link_url(); ?></small></h2>
         
      <?php the_content('Read More') ?>
      
        <ul class="meta_info">
          <li>Tags: <?php the_tags('#', ' #'); ?></li>
          <li><a href="http://twitter.com/home?status=Currently reading <?php the_permalink(); ?> /via @timothybsmith" title="Share on Twitter" target="_blank">Share on Twitter</a> &middot; <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Share on Facebook" target="blank">Share on Facebook</a></li>
          <li><?php previous_post_link('%link', 'Prev');?> <?php next_post_link('%link', '&middot; Next'); ?></li>
        </ul>
        
        <div class="comments">
           <?php comments_template(); ?>
        </div><!-- .comments --> 
      
<?php endwhile; endif; ?>
      

</div> <!-- end .main-content -->
<?php get_footer() ?>


