<!DOCTYPE html>

<head>
	<meta charset="utf-8" />
  <title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="/favicon.ico">

  <link rel="author" href="https://plus.google.com/117161754644004218749/posts">
	
	<!-- My styles -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/global.css"/>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsify.css"/>

  <?php if (is_page_template("portfolio.php") or is_singular('case-studies')) { ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/portfolio.css">
  <?php } ?>

  <!-- Typekit Code -->
  <script type="text/javascript" src="//use.typekit.net/mev1xgw.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/prettify.css"/>


  <!--WP Generated Header -->
  <?php wp_head(); ?>
  <!--End WP Generated Header -->
  
</head>


<body <?php body_class($class); ?>>

  <?php if (get_field('freelance_availability', 'options')) : ?>
    
    <a href="/contact">
    <div class="freelance-availability yes">
      <div class="contain">
        <p>I'm Currently Accepting Limited Contract Work.</p>
      </div>    
    </div> <!-- .freelance-availability -->
    </a>

  <?php else : ?>

  <?php endif; ?>

 
  <header>
    <div class="contain">
       <a href="/" class="logo"><h1 class="screen-reader-text">Timothy B. Smith</h1></a>
       <nav>
         <a href="/about">About</a>
         <a href="/portfolio">Portfolio</a>
         <a href="/contact">Contact</a>
       </nav>
    </div><!-- .contain -->
  </header><!-- header -->
      
  