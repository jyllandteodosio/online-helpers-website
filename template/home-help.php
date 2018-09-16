<section id="help" class="home-help section">
    
    <div class="wrap">
        
        <h2 class="section-title"><?php echo get_field( 'help_section_title' ); ?></h2>
        <div class="section-subtitle"><?php echo the_field( 'help_section_subtitle' ); ?></div>
        
        <div class="help-list">
            
            <?php if( have_rows( 'help_list' ) ): ?>
                <?php while( have_rows( 'help_list' ) ): the_row(); ?>
            
                <div class="help-item">
                    
                    <div class="help-image-wrap">
                        <img class="help-image" src="<?php echo get_sub_field( 'help_image' ); ?>" alt=""/>
                        <img class="help-image-hover" src="<?php echo get_sub_field( 'help_image_hover' ); ?>" alt=""/>
                    </div>
                    
                    <div class="help-content">
                        <h3 class="help-title"><?php echo get_sub_field( 'help_title' ); ?></h3>
                        <p class="help-description"><?php echo get_sub_field( 'help_content' ); ?></p>
                    </div>
                    
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
        
    </div>
    
</section>