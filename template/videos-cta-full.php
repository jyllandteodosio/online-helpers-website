<section class="videos-cta-full section">

    <div class="wrap">

        <div class="videos-cta-content"><?php echo the_field( 'videos_cta_content' ); ?></div>

        <div class="content-wrap">

            <?php if( have_rows( 'videos_cta_boxes' ) ): ?>
                <?php while( have_rows( 'videos_cta_boxes' ) ): the_row(); ?>

                <div class="videos-cta-item"><?php echo the_sub_field( 'videos_cta_item_content' ); ?></div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </div>

</section>