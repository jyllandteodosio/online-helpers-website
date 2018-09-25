<h1>Portfolio</h1>
<section class="portfolio-grid">

    <div class="wrap">

        <div class="p-category-wrap">

            <?php

            $current_category = 'all';

            if( isset( $_GET['category'] ) ) {
                $current_category = $_GET['category'];
            }

            $portfolio_categories = get_terms( array(
                'taxonomy' => 'portfolio_categories',
                'hide_empty' => false,
            ) );

            if ( ! empty( $portfolio_categories ) && ! is_wp_error( $portfolio_categories ) ) : ?>

            <ul>

                <?php

                $current_class = '';

                if( $current_category == 'all' || $current_category == '' ) {
                    $current_class = 'current';
                }

                ?>
                
                <li><a href="<?php echo get_home_url() . '/portfolios/?category=all'; ?>" class="<?php echo $current_class; ?>" data-cat="0">All</a></li>

                <?php 
                
                foreach ( $portfolio_categories as $p_cat ) : 

                    $current_class = '';

                    if( $current_category == $p_cat->slug ) {
                        $current_class = 'current';
                    }

                    ?>

                    <li><a href="<?php echo get_home_url() . '/portfolios/?category=' .  $p_cat->slug; ?>" class="<?php echo $current_class; ?>" data-cat="<?php echo $p_cat->term_id; ?>"><?php echo $p_cat->name; ?></a></li>

                    <?php 
                
                endforeach; 
                
                ?>
            </ul>

            <?php endif; ?>

        </div>

        <div class="portfolio-wrap">

            <?php
            
            $portfolio_args = array( 
                'post_type' => 'portfolio',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC'
            );
            
            if( $current_category != 'all' ) {
                $portfolio_args['tax_query'] = array( 
                    array(
                        'taxonomy' => 'portfolio_categories',
                        'field'    => 'slug',
                        'terms'    => $current_category,
                    ),
                );
            }
            
            $portfolio_query = new WP_Query( $portfolio_args );

            if( $portfolio_query->have_posts() ) :
            
                while( $portfolio_query->have_posts() ) :
            
                $portfolio_query->the_post();

                ?>

                <div class="portfolio-item">
                    <div class="portfolio-hover" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">

                        <?php

                        if( get_field( 'type' ) ) :
                            if( get_field( 'type' ) == 'wistia' ) :

                            ?>

                            <a class="portfolio-item-video wistia-video" href="https://home.wistia.com/medias/<?php echo get_field( 'wistia_id' ); ?>">
                                <i class="fas fa-play"></i>
                            </a>

                            <?php

                            elseif( get_field( 'type' ) == 'vimeo' ):

                            ?>

                            <a class="portfolio-item-video vimeo-video" href="https://vimeo.com/<?php echo get_field( 'vimeo_id' ); ?>">
                                <i class="fas fa-play"></i>
                            </a>

                            <?php

                            elseif( get_field( 'type' ) == 'website' ):

                            ?>

                            <a class="portfolio-item-link" href="<?php echo get_field( 'website_url' ); ?>" target="_blank">
                                <i class="fas fa-link"></i>
                            </a>

                            <?php

                            endif;
                        endif;

                        ?>

                    </div>

                </div>

                <?php

                endwhile;

            wp_reset_postdata();

            endif;

            ?>

        </div>

    </div>

</section>