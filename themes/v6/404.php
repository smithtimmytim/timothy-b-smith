<?php @header("HTTP/1.1 404 Not found", TRUE, 404); ?>
<?php get_header() ?>

<section role="main" class="main-content">
  <div class="contain">
    <div class="content">
        <h1 class="statement">Awwwww snap! What happened? This page doesn't exist!</h2>
        <p>Should something be here? <a href="/contact">Get in touch</a>. Hey look! Cat mittens!</p>
        <img src="<?php bloginfo('template_url');?>/img/cat-mittens.gif" alt="Cat Mittens Gif">
    </div><!-- end .content -->
  </div><!-- end .contain -->
</section><!-- end .main-content -->
<?php get_footer(); ?>
