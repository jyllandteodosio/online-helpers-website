<section class="home-blog section">

    <div class="wrap">

        <h3 class="section-title"><?php echo get_field( 'blog_title' ); ?></h3>
        <div class="section-subtitle"><?php echo the_field( 'blog_subtitle' ); ?></div>

        <div class="blog-wrap">

            <?php if( have_rows( 'featured_blogs' ) ): ?>
            <?php while( have_rows( 'featured_blogs' ) ): the_row(); ?>

            <div class="blog-item">

                <?php

                $blog_id = get_sub_field( 'blog_item' );

                $blog_thumb = get_the_post_thumbnail_url( $blog_id, 'large' ) ? get_the_post_thumbnail_url( $blog_id, 'large' ) : get_stylesheet_directory_uri() . '/images/Online Helpers_Default.JPG';
                
                ?>

                <div class="blog-thumbnail">
                    <div class="blog-thumb-overlay" style="background: linear-gradient(rgba(40, 153, 213, 0.3), rgba(40, 153, 213, 0.3));"></div>
                    <img src="<?php echo $blog_thumb; ?>" alt="<?php echo get_the_title( $blog_id ); ?>"/>
                </div>

                <div class="blog-content-wrap">
                    <?php /* ?>
                    <p class="blog-stats">
                        <span class="comment-count"><?php echo get_comments_number( $blog_id ); ?> <i class="fas fa-comment" ></i></span>
                    </p>
                    <?php */ ?>

                    <h4 class="blog-title"><a href="<?php echo get_the_permalink( $blog_id ); ?>"><?php echo get_the_title( $blog_id ); ?></a></h4>

                    <div class="blog-excerpt"><?php echo apply_filters( 'the_content', get_post_field( 'post_excerpt', $blog_id ) ); ?></div>

                    <a class="blog-read-more" href="<?php echo get_the_permalink( $blog_id ); ?>">READ MORE</a>

                </div>

            </div>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <a class="blog-view-more" href="<?php echo get_field( 'view_blogs_link' ); ?>">VIEW ALL BLOG POSTS <i class="fas fa-arrow-right"></i></a>

    </div>

</section>