<?php
/**
 *
 * Template Name: Portfolio
 *
 */

//* Add custom body class to the head
add_filter( 'body_class', 'sp_body_class' );
function sp_body_class( $classes ) {
	
	$classes[] = 'portfolio-page';
	return $classes;
	
}

//* Enqueue Custom Scripts
add_action( 'wp_enqueue_scripts', 'scripts_videos' );
function scripts_videos() {
    wp_enqueue_script( 'wistia-embed', get_stylesheet_directory_uri() . '/js/custom/wistia-embed.js', array(), false, true );
}

//* Force full-width-content layout setting
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Replace the standard loop with our custom loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'content_portfolio' );

function content_portfolio () {
    get_template_part('template/portfolio-grid'); 
}

genesis();
