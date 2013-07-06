<?php

// Adding Custom Post Type - Case Studies

add_action( 'init', 'create_post_type');
function create_post_type() {
  register_post_type( 'case-studies',
    array(
      'labels' => array(
        'name' => 'Case Studies',
        'singular_name' => 'Case Study',
        'menu_name' => 'Case Studies',
        'add_new' => 'Add Case Study',
        'add_new_item' => 'Add New Case Study',
        'edit' => 'Edit',
        'edit_item' => 'Edit Case Study',
        'new_item' => 'New Case Study',
        'view' => 'View Case Study',
        'view_item' => 'View Case Study',
        'search_items' => 'Search Case Studies',
        'not_found' => 'No Case Studies Found',
        'not_found_in_trash' => 'No Case Studies Found in Trash',
        'parent' => 'Parent Case Study',
      ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 5,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'portfolio', 'with_front' => ''),
    'query_var' => true,
    'exclude_from_search' => false,
    'has_archive' => false,
    'supports' => array( 'title','editor','excerpt','custom-fields','thumbnail','post-formats' ),
    )
  );
}


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

// Registering Option Page
register_options_page('Hiring');

remove_filter('the_content', 'wptexturize');


// Messing with WP Admin Bar


function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    // we can remove a menu item, like the Comments link, just by knowing the right $id
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('wpseo-menu');
    // or we can remove a submenu, like New Link.
    $wp_admin_bar->remove_menu('new-link', 'new-content');
    $wp_admin_bar->remove_menu('new-media', 'new-content');
    $wp_admin_bar->remove_menu('new-user', 'new-content');
    // we can add a submenu item too
    $wp_admin_bar->add_menu( array(
        'parent' => false,
        'id' => 'work-availability',
        'title' => __('Availability'),
        'href' => admin_url( 'admin.php?page=acf-options-hiring')
    ) );
}
// and we hook our function via
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );



?>
