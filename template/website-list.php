<section class="custom-websites section">

    <div class="wrap">

        <h2 class="section-title"><?php echo get_field( 'custom_websites_title' ); ?></h2>

        <div class="websites-wrap">

            <?php
            
            if( have_rows( 'websites_list' ) ):
            
                while( have_rows( 'websites_list' ) ):
            
                    the_row();
            
                    $website_id = get_sub_field( 'website' );
            
                    ?>
            
                    <div class="website-item">
                        <div class="website-item-hover" style="background-image: url(<?php echo get_the_post_thumbnail_url( $website_id ) ?>); ">
                            <a href="<?php echo get_field( 'website_url', $website_id ) ?>" class="website-item-link"><i class="fas fa-link"></i></a>
                        </div>
                        
                        <div class="website-content-wrap">
                            <h3 class="website-item-title"><?php echo get_the_title( $website_id ) ?></h3>
                        </div>
                    </div>
            
                    <?php
            
                endwhile;
            
            endif;
            
            ?>

        </div>
        
        <a href="<?php echo get_field( 'view_more_website_link' ); ?>" class="website-view-more">VIEW ALL WEBSITES<i class="fas fa-arrow-right"></i></a>

    </div>

</section>