<section class="about-multi-content section">
    
    <div class="wrap">
        
        <?php if( have_rows( 'about_multi_content_row' ) ): ?>
            <?php while( have_rows( 'about_multi_content_row' ) ): the_row(); ?>
        
            <div class="content-wrap">

                <div class="left-content">
                    <?php echo the_sub_field( 'about_multi_left_content' ); ?>
                </div>

                <div class="right-content">
                    <?php echo the_sub_field( 'about_multi_right_content' ); ?>
                </div>

            </div>
        
            <?php endwhile; ?>
        <?php endif; ?>
        
    </div>
    
</section>