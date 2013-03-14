<?php get_header()?>

<div class="container">
  <div class="row">
    
    <div class="threecol last right ad">
      <h3>Sponsored By</h3>
      <div id="azk1"></div>
    </div><!-- .threecol -->
    
 <?php if (have_posts()) : ?>
  
    <?php while (have_posts()) : the_post(); ?>  

    <div class="ninecol content entry">
      <h2><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <ul class="date">
          <li><?php the_time('F j, Y');?></li>
      </ul>

      <?php the_excerpt()?>
      
      <ul class="meta_info">
          <li><?php the_tags('#', ' #'); ?></li>
      </ul>
      
      <p class="right"><a class="button" href="<?php echo get_permalink(); ?>">Read the rest →</a></p>
      
      
    </div><!-- .ninecol content entry --> 

<?php endwhile; ?>
<?php endif; ?>

<div class="ninecol">
  <?php wp_pagenavi(); ?>
</div><!-- .ninecol -->

</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
