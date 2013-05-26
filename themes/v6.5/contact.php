<?php
/*
Template Name: Contact
*/
?>


<?php get_header(); ?>

<section role="main" class="main-content">
	<div class="contain">
		<div class="content">
		    <h2 class="statement">Need to Get in Touch? You're in the Right Place!</h2>
		    <p>Thanks for reaching out! I try getting to my email pretty quickly, so you should be hearing from me soon. If you don't like using forms, you can always email me at <strong>smith[at]ttimsmith[dot]com</strong>.</p>

		    <?php gravity_form(1, false, false, false, '', false); ?>
		 
		</div><!-- enc .content -->
	</div><!-- end .contain -->
</section><!-- end .main-content -->



<?php get_footer(); ?>

