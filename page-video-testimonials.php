<?php
/**
 *
 * Template Name: Video Testimonials
 *
 */

//* Enqueue Custom Scripts
add_action( 'wp_enqueue_scripts', 'scripts_videos' );
function scripts_videos() {
    
	wp_enqueue_style( 'swiper-min', '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css' );
    
	wp_enqueue_script( 'swiper', '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js', array(), false, true );
    
    wp_enqueue_script( 'swiper-custom', get_stylesheet_directory_uri() . '/js/custom/swiper.js', array(), false, true );
    
    wp_enqueue_script( 'video-banner', get_stylesheet_directory_uri() . '/js/custom/video-banner.js', array(), false, true );
    
    wp_enqueue_script( 'wistia-embed', get_stylesheet_directory_uri() . '/js/custom/wistia-embed.js', array(), false, true );
}

//* Force full-width-content layout setting
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Add custom body class to the head
add_filter( 'body_class', 'sp_body_class' );
function sp_body_class( $classes ) {
	
	$classes[] = 'inner-page full-width video-testimonials';
	return $classes;
	
}

//* Replace the standard loop with our custom loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'content_video' );

function content_video () { 
    get_template_part('template/videos-banner'); 
    get_template_part('template/videos-content'); 
    get_template_part('template/videos-cta-full'); 
    get_template_part('template/videos-slider'); 
    get_template_part('template/inner-cta-light'); 
    get_template_part('template/videos-multi-content'); 
    get_template_part('template/inner-cta-dark'); 
}

genesis();
