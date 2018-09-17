<section class="video-banner">

    <div class="video-background" style="<?php echo $banner_image; ?>">

        <div class="video-text-wrap">
            <div class="video-text">
                <?php echo get_field( 'video_banner_title' ); ?>
            </div>
        </div>

        <section id="big-video">
            <div class="video" data-src="<?php echo get_field( 'video_banner_placeholder_image' ); ?>" data-video="<?php echo get_field( 'video_banner_file' ); ?>" data-placeholder="<?php echo get_field( 'video_banner_placeholder_image' ); ?>"></div>
        </section>

    </div>

</section>