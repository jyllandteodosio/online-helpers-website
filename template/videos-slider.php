<section class="videos-slider section">

    <div class="wrap">

        <h2 class="section-title"><?php echo get_field( 'video_slider_title' ); ?></h2>

        <div class="videos-container">

            <div class="videos-wrap swiper-wrapper">

                <?php if( have_rows( 'video_slider' ) ): ?>

                <?php while( have_rows( 'video_slider' ) ): the_row(); ?>

                <div class="videos-item swiper-slide">
                    
                    <a class="videos-item-video" href="https://home.wistia.com/medias/<?php echo get_sub_field( 'video_embed_id' ); ?>">
                        <img src="<?php echo get_sub_field( 'video_item_thumbnail' ); ?>" alt="<?php echo get_sub_field( 'video_item_title' ); ?>"/>
                    </a>

                    <div class="videos-item-wrap">

                        <h3 class="videos-item-title">
                            <?php echo the_sub_field( 'video_item_title' ); ?>
                        </h3>

                        <div class="videos-item-desc">
                            <?php echo the_sub_field( 'video_item_description' ); ?>
                        </div>
                        
                    </div>
                    
                </div>

                <?php endwhile; ?>

                <?php endif; ?>

            </div>

            <div class="videos-next swiper-button-next">
                <i class="fa fa-angle-right"></i>
            </div>
            
            <div class="videos-prev swiper-button-prev">
                <i class="fa fa-angle-left"></i>
            </div>

            <div class="videos-pagination swiper-pagination"></div>

        </div>

    </div>

</section>