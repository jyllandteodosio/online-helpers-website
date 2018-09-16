<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Quicksand:300,400,500,700', array(), CHILD_THEME_VERSION );
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/css/main.css', array(), null );
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.2.0/css/all.css', array(), CHILD_THEME_VERSION );

    wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/js/custom/main.js', array( 'jquery' ), false, false );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//add acf options page
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

}

//* Custom Styles

//* Reposition the secondary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_before_header', 'genesis_do_subnav' );

//* Remove default footer credits
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'genesis_custom_footer' );

function genesis_custom_footer () {
?>

<div class="wrap">

    <div class="footer-wrap">

        <div class="footer-column about-column">

            <h5 class="footer-header"><?php echo get_field( 'about_title', 'option' ); ?></h5>
            <div class="footer-content">
                <?php echo the_field( 'about_text', 'option' ); ?>
            </div>

        </div>

        <div class="footer-column menu-column">

            <h5 class="footer-header"><?php echo get_field( 'menu_title', 'option' ); ?></h5>
            <div class="footer-content">
                <?php echo the_field( 'menu_links', 'option' ); ?>
            </div>

        </div>

        <div class="footer-column support-column">

            <h5 class="footer-header"><?php echo get_field( 'support_title', 'option' ); ?></h5>
            <div class="footer-content">
                <?php echo the_field( 'support_links', 'option' ); ?>
            </div>

        </div>

        <div class="footer-column contact-column">

            <h5 class="footer-header"><?php echo get_field( 'contact_title', 'option' ); ?></h5>
            <div class="footer-content contact-links">
                <?php //echo the_field( 'contact_links', 'option' ); ?>
                <?php if( have_rows( 'contact_links', 'option' ) ): ?>
                <ul>
                    <?php while( have_rows( 'contact_links', 'option' ) ): the_row(); ?>

                    <li><?php echo the_sub_field( 'contact_link' ); ?></li>

                    <?php endwhile; ?>
                </ul>
                <?php endif;; ?>
            </div>

            <h5 class="footer-header"><?php echo get_field( 'business_hours_title', 'option' ); ?></h5>
            <div class="footer-content business-hours">
                <?php echo the_field( 'business_hours', 'option' ); ?>
            </div>

            <div class="footer-content social-media">
                <?php echo the_field( 'social_media_links', 'option' ); ?>
            </div>

        </div>

    </div>

    <div class="footer-copyright"><?php echo the_field( 'footer_credits', 'option' ); ?></div>

</div>

<?php
                                  }
