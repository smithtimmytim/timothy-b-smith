<?php


// add theme support for link posts

add_theme_support( 'post-formats', array( 'link' ) );



// link posts url_link

function ts_link_url() {
	
	global $post;
	
	if ( has_post_format( 'link' ) && get_post_meta( $post->ID, 'link_url', true ) ) {
		echo '<a target="_blank" href="' . get_post_meta( $post->ID, 'link_url', true ) . '"></a>';
	}

}
