<?php
/*
Template Name: About
*/
get_header()?>

<div class="container">
  <div class="row content">
    
    <div class="twelvecol">
      <h2>About Me</h2>
    </div><!-- .twelvecol -->
    
    <div class="eightcol">
      <img src="<?php bloginfo('template_url'); ?>/img/tim-headshot.jpg" alt="Head shot of Tim">
      <p>I'm a Designer and wanna-be Front-End Developer working in Vista, California. I have a passion for making great stuff and having fun while doing it. When not insanely busy being a nerd, I'm watching the Lakers play, being absolutely amazing or sippin’ on some coffee.</p>
      
      <p>Previously, I was the User Interface Designer for <a href="http://getworksimple.com" target="_blank">WorkSimple, Inc.</a> and Lead Designer for <a href="http://bundly.com" target="_blank">Bundly</a>. I've had the honor of working with companies like <a href="http://fuelbrandinc.com/" target="_blank">Fuel Brand Inc.</a>, <a href="http://www.zeusjones.com/" target="_blank">Zeus Jones</a> and <a href="http://www.freshtilledsoil.com/" target="_blank">Fresh Tilled Soil</a>.</p>
      
      <h3>Shots from Dribbble</h3>
      <div class="shots">
    		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Work Widget') ) : ?>
    		<?php endif; ?>
    	</div>
      
    </div> <!-- end .eightcol -->
    
    <div class="fourcol right last aside">
      
      <section>
        <h3>Speaking Engagements</h3>
        <p>If you'd like me to speak at your conference or meetup, drop me a line via my <a href="/contact">nifty form</a> or by email at <a href="mailto:tim@timothybsmith.com?subject=Speak at My Event">tim@timothybsmith.com</a>.</p>
      </section>
      
      <section>
      <h3>Personal Projects</h3>
      <h4><a href="http://laughifyouwanttoo.com" target="_blank">Laugh If You Want Too</a></h4>
      <p>A podcast that deals with… nothing. We cover topics like what’s going on in our lives and the funny things that happen around us. <a href="http://laughifyouwanttoo.com/" target="_blank">Visit site</a></p>
      </section>
      
      <section>
      <h4><a href="http://theeastwing.net" target="_blank">The East Wing</a></h4>
      <p>A podcast that talks with industry experts about design, solving problems and the keys to creating products with value. <a href="http://theeastwing.net/" target="_blank">Visit site</a></p>
      </section>
      
      <h3>Published Articles</h3>
      <ul class="published">
        <li><a href="http://www.netmagazine.com/opinions/solving-problems-efficiently-through-design" target="_blank">Solving Problems Efficiently Through Design <small>.net Magazine, February 2012</small></a></li>
        <li><a href="http://www.obox-design.com/view_item.cfm/title/correcting-whats-broken" target="_blank">Correcting What's Broken <small>Obox, May 2010</small></a></li>
        <li><a href="http://www.uxbooth.com/blog/consistency-key-to-a-better-user-experience/" target="_blank">Consistency: Key to a Better User Experience <small>UX Booth, March 2010</small></a></li>
      </ul>
      
      <h3>Me, Elsewhere</h3>
      <ul>
        <li><a href="http://dribbble.com/timothybsmith" target="_blank">Dribbble</a></li>
        <li><a href="https://twitter.com/#!/timothybsmith" target="_blank">Twitter</a></li>
        <li><a href="http://zerply.com/timothybsmith" target="_blank">Zerply</a></li>
        <li><a href="http://www.rdio.com/people/timothybsmith/" target="_blank">Rdio</a></li>
      </ul>
      
                  
    </div> <!-- end .fourcol -->
    
  </div> <!-- end .row .content -->
</div> <!-- end .container -->


<?php get_footer()?>
