<!DOCTYPE html>

<head>
	<meta charset="utf-8" />
	<meta name="description" content="Tim Smith. Designer. Lakers Fan. Absolutely Amazing. Exploring the world one cup of coffee at a time." />
  <title><?php bloginfo('name'); ?> » <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/1140.css" type="text/css" media="screen" />
	
	<!-- Adaptive Styles -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css" type="text/css" media="screen" />
	
	<!-- My styles -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
	
	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
	
	<!-- TypeKit Code -->
	<script type="text/javascript" src="http://use.typekit.com/mcy5zbe.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js"></script>
	
	<script type="text/javascript">var z=document.createElement("script");z.type="text/javascript";z.async=true;z.src="http://engine.carbonads.com/z/12277/azk1_2_1";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(z, s);</script>

  <!--WP Generated Header -->
  <?php wp_head(); ?>
  <!--End WP Generated Header -->
  
</head>


<body>
<div class="container">
  <div class="row header">
    <div class="twocol">
      <h1 class="logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/img/supersmith_green.png" /></a></h1>
    </div>
    <div class="sixcol last right">
      <ul class="nav">
        <?php wp_list_pages('exclude=87&title_li=');?>
        <li><a href="http://feeds.feedburner.com/therealtimothybsmith" class="button" target="_blank">Subscribe</a></li>
      </ul>
  </div>  
</div>
