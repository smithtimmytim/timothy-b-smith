<?php @header("HTTP/1.1 404 Not found", TRUE, 404); ?>
<?php get_header() ?>

<section role="main" class="main-content">

	<div class="module">
		<div class="contain">
			<h1 class="statement">Doh! 404…</h1>
		</div>
	</div>
 
  <div class="content">
    <div class="contain">
      <p>Should something be here? <a href="/contact">Let me know</a>.</p>
      <img src="<?php bloginfo('template_url');?>/img/cat-mittens.gif" alt="Cat Mittens Gif">
    </div><!-- end .contain -->
  </div><!-- end .content -->

</section><!-- end .main-content -->

<?php get_footer(); ?>
