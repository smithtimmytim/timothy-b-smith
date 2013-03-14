<?php get_header() ?>

 <div class="main-content projects">      

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
      
      <h2><?php the_title(); ?> <small>//<?php custom_field('project_date'); ?></small></h2>

         <p><strong>Role:</strong> <?php custom_field('role'); ?></p>

      <?php the_content(); ?>

      <p><a class="butt" target="_blank" href="<?php custom_field('project_url'); ?>">Go To Site &rarr;</a></p>
      
<?php endwhile; endif; ?>
      

</div> <!-- end .main-content -->
<?php get_footer() ?>


