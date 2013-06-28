<?php @header("HTTP/1.1 404 Not found", TRUE, 404); ?>
<?php get_header() ?>

<section role="main" class="main-content">
  <h1 class="statement">Doh! 404 Dude…</h2>
  <div class="content">
    <div class="contain">
      <p>Should something be here? <a href="/contact">Get in touch</a>. Hey look! Cat mittens!</p>
      <img src="<?php bloginfo('template_url');?>/img/cat-mittens.gif" alt="Cat Mittens Gif">
    </div><!-- end .contain -->
  </div><!-- end .content -->
</section><!-- end .main-content -->
<?php get_footer(); ?>
