<?php get_header(); ?>

<section class="work-full">
  <div class="wrap">
    <img src="<?php the_field('portfolio_item_hero'); ?>" alt="Hero for <?php the_title(); ?>" />
  </div><!-- end .wrap -->
</section>


<?php the_post(); ?>

<section role="main" class="main-content"> 
  <div class="contain">
    <div class="content">
    
      <h2><?php the_title(); ?><small><?php the_field('portfolio_item_class'); ?> Project</small></h2>
      <ul class="project-info">
        <li><strong>Role:</strong> <?php the_field('portfolio_item_role'); ?></li>
        <li><strong>Type:</strong> <?php the_field('portfolio_item_type'); ?></li>
        <?php
          if( get_field('portfolio_item_url')): ?>
            <li><a href="<?php the_field('portfolio_item_url'); ?>">Visit Project</a></li>
        <?php endif; ?>
      </ul>

      <?php the_content(); ?>

      <?php previous_post_link('<p class="next-one">On to the next one! %link </p>'); ?>

    </div><!-- end .content -->

      <div class="cta">  
        <p>Like what you see?<br><a href="/contact">Tell me about your project</a>.</p>
      </div>
  </div><!-- end .contain -->
</section><!-- end .main-content -->
<?php get_footer() ?>