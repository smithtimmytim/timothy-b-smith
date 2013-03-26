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


// Functions for processing custom fields

function get_custom_field($field, $format = '', $date_format = 'F j, Y')
{
        $fetch = $field;
        $fetch = get_post_custom_values($field);
        $fetch = $fetch[0];

        // Date
        if ($format == 'date' & $fetch !='') $fetch = format_date($fetch, $date_format);

        // Text Block
        elseif ($format == 'text_block') $fetch = wpautop($fetch);

        // HTML
        elseif ($format == 'html') $fetch = html_entity_decode($fetch);

        // Google Map
        elseif ($format == 'google_map') $fetch = display_google_map($fetch);

        return $fetch;
}

function custom_field($field, $format = '', $date_format = 'F j, Y')
{
        echo get_custom_field($field, $format, $date_format);
}

function format_date($date, $date_format)
{
        $date = date($date_format, $date);
        return $date;
}

function display_google_map($code)
{
        $code = html_entity_decode($code);
        // Remove the info bubble. Usually desirable, but use the html format if unwanted.
        $code = str_replace("output=embed", "output=embed&iwloc=near", $code);
        return $code;
}

add_action( 'init', 'my_add_excerpts_to_pages' );
    function my_add_excerpts_to_pages() {
         add_post_type_support( 'page', 'excerpt' );
    }


function filter_ptags_on_images($content){
return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


// Featured Images

add_theme_support ('post-thumbnails');

add_image_size('portfolio-thumb', 640, 9999);


?>
