<?php
/*
Template Name: Contact
*/
?>


<?php get_header(); ?>

<section role="main" class="main-content">
	<div class="content">
    <div class="contain">
		    <p>Thanks for reaching out! I try getting to my email pretty quickly, so you should be hearing from me soon. If you don't like using forms, you can always email me at <strong>smith[at]ttimsmith[dot]com</strong>.</p>
        
        <?php if (get_field('freelance_availability', 'options')) : ?>

          <?php if (get_field('month_availability', 'options') ) : ?>
            <div class="dot yes"></div>
            <p><strong>Availability:</strong> Currently accepting work for <?php the_field('month_availability', 'options'); ?> <?php the_field('year_availability', 'options'); ?>.</p>
          <?php endif; ?>

        <?php else : ?>
          <div class="dot no"></div>
          <p><strong>Availability:</strong> Currently not accepting freelance work.</p>

        <?php endif; ?>
        
		    <?php gravity_form(1, false, false, false, '', false); ?>
		 
		</div><!-- end .contain -->
	</div><!-- end .content-->
</section><!-- end .main-content -->



<?php get_footer(); ?>

