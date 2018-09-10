<section class="home-stats section">

    <div class="wrap">

        <h4 class="section-title"><?php echo get_field( 'stats_title' ); ?></h4>
        
        <div class="stats-wrap">
            
        <?php if( have_rows( 'stats_list' ) ): ?>
            <?php while( have_rows( 'stats_list' ) ): the_row(); ?>
            
            <div class="stats-item">
                <div class="stats-item-num"><?php echo get_sub_field( 'stats_number' ); ?></div>
                <p class="stats-item-text"><?php echo get_sub_field( 'stats_description' ); ?></p>
            </div>
            
            <?php endwhile; ?>
        <?php endif; ?>
            
        </div>

    </div>

</section>