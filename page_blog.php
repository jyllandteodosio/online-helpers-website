<?php
/**
 *
 * Template Name: Blog
 *
 */

//* Add custom body class to the head
add_filter( 'body_class', 'sp_body_class' );
function sp_body_class( $classes ) {
	
	$classes[] = 'inner-page inner-banner-page blog-page';
	return $classes;
	
}

//* Remove the blog entry title (requires HTML5 theme support)
remove_action( 'genesis_before_loop', 'genesis_do_blog_template_heading' );

//* Remove the entry meta in the entry header (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
add_action( 'genesis_entry_header', 'blog_thumbnail', 1 );

function blog_thumbnail () {
    the_post_thumbnail();
}

//* Remove the entry meta in the entry footer (requires HTML5 theme support)
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
add_action( 'genesis_entry_footer', 'custom_read_more' );

function custom_read_more () {
    echo '<a href="'.get_the_permalink().'" class="read-more-link">READ MORE</a>';
}

//* Add custom banner
add_action( 'genesis_after_header', 'inner_banner' );

function inner_banner() {
    get_template_part('template/inner-banner');
}

genesis();
