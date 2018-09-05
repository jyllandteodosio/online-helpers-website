<section class="home-banner">
    
    <?php $banner_image = get_field( 'banner_background_image' ) ? 'background-image: url('. get_field( 'banner_background_image' ).');' : ''; ?>
    
    <div class="banner-background" style="<?php echo $banner_image; ?>">
        
        <div class="banner-text-wrap">
            
            <div class="banner-text">
                
                <span class="banner-title"><?php echo get_field( 'banner_title' ); ?></span>
                <div class="banner-subtitle">
                    <?php echo the_field( 'banner_subtitle' ); ?>
                </div>
                
                <?php echo the_field( 'banner_cta' ); ?>
                
            </div>
        </div>
        
        <a href="#" class="home-scroll"><i class="fa fa-arrow-down"></i></a>
    </div>

</section>