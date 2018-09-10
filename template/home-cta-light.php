<section class="home-cta-light section">
    
    <div class="wrap">
        
        <div class="content-wrap">
            
            <div class="left-content">
                <?php echo the_field( 'light_left_content' ); ?>
            </div>
            
            <div class="right-content">
                <?php 
                $right_content_image = get_field( 'light_right_image' ); 
                
                if( $right_content_image ): ?>
                
                <img src="<?php echo $right_content_image; ?>" alt="CTA"/>
                
                <?php endif; ?>
            </div>
            
        </div>
        
    </div>
    
</section>