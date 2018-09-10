<section class="home-testimonials section">

    <div class="wrap">

        <h4 class="section-title"><?php echo get_field( 'testimonials_title' ); ?></h4>

        <div class="testimonials-container">

            <div class="testimonials-wrap swiper-wrapper">

                <?php if( have_rows( 'testimonials_list' ) ): ?>

                <?php while( have_rows( 'testimonials_list' ) ): the_row(); ?>

                <div class="testimonials-item swiper-slide">

                    <?php 
                    $test_id = get_sub_field( 'testimonials_item' ); 
                    $test_image =  get_the_post_thumbnail_url( $test_id, 'thumbnail' );
                    ?>
                    
                    <div class="test-image">
                        <img src="<?php echo $test_image; ?>" alt="<?php echo get_the_title( $test_id ); ?>"/>
                    </div>
                    
                    <div class="test-content"><?php echo apply_filters( 'the_content', get_post_field( 'post_content', $test_id ) ); ?></div>
                    
                    <div class="test-name"><?php echo get_the_title( $test_id ); ?></div>
                    
                </div>

                <?php endwhile; ?>

                <?php endif; ?>

            </div>

            <div class="testimonials-pagination swiper-pagination"></div>

        </div>

    </div>

</section>