<section class="videos-multi-content section">
    
    <div class="wrap">
        
        <h3 class="section-title"><?php echo get_field( 'video_multi_title' ); ?></h3>
        <div class="section-subtitle"><?php echo the_field( 'video_multi_subtitle' ); ?></div>
        
        <?php if( have_rows( 'video_multi_content_row' ) ): ?>
            <?php while( have_rows( 'video_multi_content_row' ) ): the_row(); ?>
        
            <div class="content-wrap">

                <div class="left-content desktop-content">
                    <?php echo the_sub_field( 'video_multi_left_content' ); ?>
                </div>

                <div class="left-content mobile-content">
                    <?php echo the_sub_field( 'video_multi_left_content_mobile' ); ?>
                </div>

                <div class="right-content desktop-content">
                    <?php echo the_sub_field( 'video_multi_right_content' ); ?>
                </div>

                <div class="right-content mobile-content">
                    <?php echo the_sub_field( 'video_multi_right_content_mobile' ); ?>
                </div>

            </div>
        
            <?php endwhile; ?>
        <?php endif; ?>
        
    </div>
    
</section>