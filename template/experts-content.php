<section class="experts-content section">
    
    <div class="wrap">
        
        <?php if( have_rows( 'experts_content_row' ) ): ?>
            <?php while( have_rows( 'experts_content_row' ) ): the_row(); ?>
        
            <div class="content-wrap">

                <div class="left-content">
                    <?php echo the_sub_field( 'experts_left_content' ); ?>
                </div>

                <div class="right-content">
                    <?php echo the_sub_field( 'experts_right_content' ); ?>
                </div>

            </div>
        
            <?php endwhile; ?>
        <?php endif; ?>
        
    </div>
    
</section>