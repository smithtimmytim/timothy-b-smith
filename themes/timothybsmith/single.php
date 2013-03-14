<?php get_header() ?>
<div class="container">
  <div class="row content">
    
     <div class="threecol last right ad">
        <h3>Sponsored By</h3>
        <div id="azk1"></div>
      </div><!-- .threecol -->
    
    <div class="ninecol">
      

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
      
      <h2><?php the_title(); ?></h2>
      <ul class="date">
        <li>Posted <?php the_time('F j, Y');?></li>
      </ul>
      
      <div class="rdbWrapper" data-show-read="1" data-show-send-to-kindle="0" data-show-print="0" data-show-email="0" data-orientation="0" data-version="1" data-bg-color="#f3f3f3" data-text-color="#080000"></div><script type="text/javascript">(function() {var s = document.getElementsByTagName("script")[0],rdb = document.createElement("script"); rdb.type = "text/javascript"; rdb.async = true; rdb.src = document.location.protocol + "//www.readability.com/embed.js"; s.parentNode.insertBefore(rdb, s); })();</script>
         
      <?php the_content('Read More') ?>
      
      
        <ul class="post-nav">
          <li><?php previous_post_link('%link', '&larr;'); ?></li>
          <li><?php next_post_link('%link', '&rarr;'); ?></li>
        </ul>
        
        <div class="share">
          <p><a href="http://twitter.com/home?status=Currently reading <?php the_permalink(); ?> /via @timothybsmith" title="Share on Twitter" target="_blank">Share on Twitter</a> &middot; <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Share on Facebook" target="blank">Share on Facebook</a></p>
        </div>
      
      <ul class="meta_info">
        <li><?php the_tags('#', ' #'); ?></li>
      </ul>
      
      </div><!-- .eightcol -->
<?php endwhile; endif; ?>
      
    
 </div><!-- .row content -->
</div><!-- .container -->




<?php get_footer() ?>
