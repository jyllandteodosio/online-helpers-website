<section class="home-clients section">

    <div class="wrap">

        <h4 class="section-title"><?php echo get_field( 'clients_title' ); ?></h4>

        <div class="clients-container">

            <div class="clients-wrap swiper-wrapper">

                <?php if( have_rows( 'clients_list' ) ): ?>

                <?php while( have_rows( 'clients_list' ) ): the_row(); ?>

                <div class="clients-item swiper-slide">
                    <a href="<?php echo get_sub_field( 'client_link' ); ?>" class="clients-item-link">
                        <img src="<?php echo get_sub_field( 'client_logo' ); ?>" alt="<?php echo get_sub_field( 'client_name' ); ?>"/>
                    </a>
                </div>

                <?php endwhile; ?>

                <?php endif; ?>

            </div>

            <div class="clients-next swiper-button-next">
                <i class="fas fa-angle-right"></i>
            </div>
            <div class="clients-prev swiper-button-prev">
                <i class="fas fa-angle-left"></i>
            </div>

        </div>

    </div>

</section>