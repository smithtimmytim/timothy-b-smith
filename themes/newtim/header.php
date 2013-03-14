<!DOCTYPE html>

<head>
	<meta charset="utf-8" />
	<meta name="description" content="Tim Smith. Designer. Lakers Fan. Absolutely Amazing. Exploring the world one cup of coffee at a time." />
  <title><?php bloginfo('name'); ?> » <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- My styles -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsify.css"/>
	
	<!-- TypeKit Code -->
  <script type="text/javascript" src="http://use.typekit.com/nix2tnp.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<script type="text/javascript">var z=document.createElement("script");z.type="text/javascript";z.async=true;z.src="http://engine.carbonads.com/z/12277/azk1_2_1";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(z, s);</script>

  <!--WP Generated Header -->
  <?php wp_head(); ?>
  <!--End WP Generated Header -->
  
</head>


<body>

<div id="wrap">
  
  <div class="header">
     <h1 class="logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/img/supersmith_white.png" /></a></h1>
      <ul class="nav">
        <?php wp_list_pages('exclude=87&title_li=');?>
        <li><a href="http://feeds.feedburner.com/therealtimothybsmith" target="_blank">RSS</a></li>
      </ul> 
  
  </div><!-- .header -->
      
  <div class="sidebar">  
  <div class="ad">
      <div id="azk1"></div>
  </div> <!--.ad -->
  
  </div><!-- .sidebar -->

