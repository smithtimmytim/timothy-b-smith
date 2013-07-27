<?php get_header(); ?>

<section role="main" class="main-content">
  <div class="content">
    <div class="contain">

      <?php the_post (); ?>
    
      <!-- <h1 class="statement">Designer, talker &amp; coffee addict.</h1> -->
      <?php the_post_thumbnail(); ?>
      <?php the_content(); ?>

      <div class="half-col left">

        <?php if(get_field('personal_projects')) : ?>
          <h3>Projects</h3>
          <ul class="published">
            <?php while(has_sub_field('personal_projects')) : ?>
              <li><a href="<?php the_sub_field('project_url'); ?>"><?php the_sub_field('project_name'); ?><small><?php the_sub_field('project_start_date'); ?>&ndash;<?php the_sub_field('project_end_date'); ?></small></a></li>
            <?php endwhile; ?>
          </ul> 
        <?php endif; ?>

        <?php if(get_field('select_articles')): ?>
          <h3>Select Articles</h3>
          <ul class="published">
            <?php while(has_sub_field('select_articles')): ?>
              <li><a href="<?php the_sub_field('article_url'); ?>"><?php the_sub_field('article_title'); ?><small><?php the_sub_field('publisher_name'); ?>, <?php the_sub_field('published_date'); ?></small></a></li>
            <?php endwhile; ?>
          </ul> 
        <?php endif; ?>

      </div><!-- end .half-col -->

      <div class="half-col right">

        <?php if(get_field('speaking_interviews')): ?>
          <h3>Speaking &amp; Interviews</h3>
          <ul class="published">  
            <?php while(has_sub_field('speaking_interviews')): ?>
              <li><a href="<?php the_sub_field('interview_url'); ?>"><?php the_sub_field('interview_title'); ?><small><?php the_sub_field('interviewer'); ?>, <?php the_sub_field('interview_date'); ?></small></a></li>  
            <?php endwhile; ?>  
          </ul> 
        <?php endif; ?>

      </div><!-- end .half-col -->

    </div><!-- end .contain -->
  </div> <!-- end .content -->
</section> <!-- end .main-content -->
<?php get_footer(); ?>
