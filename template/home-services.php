<section class="home-services section">
    
    <div class="wrap">
        
        <h3 class="section-title"><?php echo get_field( 'services_title', 7 ); ?></h3>
        <div class="section-subtitle"><?php echo the_field( 'services_subtitle', 7 ); ?></div>
        
        <?php if( have_rows( 'services_sections', 7 ) ): ?>
        
        <div class="services-wrap">
        
            <?php while( have_rows( 'services_sections', 7 ) ): the_row(); ?>
            <hr/>
            <h4 class="services-section-title"><?php echo get_sub_field( 'services_section_title' ); ?></h4>
            
            <?php if( have_rows( 'services_section_list', 7 ) ): ?>
            
            <div class="services-section-wrap">
                
                <?php while( have_rows( 'services_section_list', 7 ) ): the_row(); ?>
                
                <div class="service-item">
                    <img src="<?php echo get_sub_field( 'service_item_image' ); ?>" alt="<?php echo get_sub_field( 'service_item_title' ); ?>" class="service-item-image"/>
                    <h5 class="service-item-title"><?php echo get_sub_field( 'service_item_title' ); ?></h5>
                    <p class="service-item-content"><?php echo get_sub_field( 'service_item_description' ); ?></p>
                </div>
                
                <?php endwhile; ?>
                
            </div>
            
            <?php endif; ?>
            
            <?php endwhile; ?>
        
        </div>
        
        <?php endif; ?>
        
    </div>
    
</section>