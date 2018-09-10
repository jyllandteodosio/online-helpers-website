<?php
/**
 *
 * Template Name: Home
 *
 */

//* Enqueue Custom Scripts
add_action( 'wp_enqueue_scripts', 'scripts_home' );
function scripts_home() {
    
	wp_enqueue_style( 'swiper-min', '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css' );
	wp_enqueue_script( 'swiper', '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js', array(), false, true );
    wp_enqueue_script( 'swiper-custom', get_stylesheet_directory_uri() . '/js/custom/swiper.js', array(), false, true );
}

//* Force full-width-content layout setting
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Replace the standard loop with our custom loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'content_home' );

function content_home () {
    get_template_part('template/home-banner'); 
    get_template_part('template/home-help'); 
    get_template_part('template/home-cta-light'); 
    get_template_part('template/home-services'); 
    get_template_part('template/home-blog'); 
    get_template_part('template/home-stats'); 
    get_template_part('template/home-clients'); 
    get_template_part('template/home-testimonials'); 
    get_template_part('template/home-cta-dark'); 
}

genesis();
