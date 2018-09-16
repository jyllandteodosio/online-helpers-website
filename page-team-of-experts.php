<?php
/**
 *
 * Template Name: Team of Experts
 *
 */

//* Force full-width-content layout setting
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Add custom body class to the head
add_filter( 'body_class', 'sp_body_class' );
function sp_body_class( $classes ) {
	
	$classes[] = 'inner-page full-width';
	return $classes;
	
}

//* Replace the standard loop with our custom loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'content_home' );

function content_home () { 
    get_template_part('template/experts-content'); 
    get_template_part('template/experts-cta-full'); 
    get_template_part('template/home-services'); 
    get_template_part('template/inner-cta-dark'); 
}

genesis();
