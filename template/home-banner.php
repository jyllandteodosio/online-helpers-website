<section class="home-banner">

    <?php $banner_image = get_field( 'banner_background_image' ) ? 'background-image: url('. get_field( 'banner_background_image' ).');' : ''; ?>

    <div class="banner-background">

        <div class="banner-text-wrap">

            <div class="banner-text">

                <div class="banner-title slideDown"><?php echo get_field( 'banner_title' ); ?></div>
                <div class="banner-subtitle slideDown">
                    <?php echo the_field( 'banner_subtitle' ); ?>
                </div>

                <?php echo the_field( 'banner_cta' ); ?>

            </div>
        </div>

        <div class="banner-svg">
            <object id="home-banner-svg" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri() . '/images/home-banner.svg'?>"></object>
        </div>
    </div>

    <a href="#help" class="home-scroll"><i class="fas fa-arrow-down"></i></a>

</section>