<?php

// add theme support for link posts

add_theme_support( 'post-formats', array( 'link', 'video' ) );



// link posts url_link

function ts_link_url() {
	
	global $post;
	
	if ( has_post_format( 'link' ) && get_post_meta( $post->ID, 'link_url', true ) ) {
		echo '' . get_post_meta( $post->ID, 'link_url', true ) . '';
	}

}


//jQuery Insert From Google
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

// FitVids Code
wp_register_script( 'fitvids', get_template_directory_uri() . '/js/jquery.fitvids-ck.js', array( 'jquery' ) );
wp_register_script( 'fitvids-action', get_template_directory_uri() . '/js/stuff-ck.js', array( 'fitvids' ) );

wp_enqueue_script( 'fitvids-action' );


function filter_ptags_on_images($content){
return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


// Featured Images

add_theme_support ('post-thumbnails');
add_image_size('portfolio-thumb', 640, 9999);

// // Registering Option Page
// register_options_page('Hiring');

?>
