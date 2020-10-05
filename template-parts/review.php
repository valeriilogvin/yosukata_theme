<section class="sect6">
    <div class="container">
        <h2 data-aos="fade-right"
            data-aos-delay="300"
            data-aos-duration="1000">
            Reviews
        </h2>

        <div class="sect6-slick">

            <?php
            $posts = get_posts( array(
                'numberposts' => 6,
                'post_type'   => 'reviews',
                'suppress_filters' => true,
            ));
            foreach( $posts as $post ){ setup_postdata($post);
                ?>

                    <div class="slide">
                        <p class="title"><?php the_title(); ?></p>
                        <div class="stars <?php the_field('stars') ?>">
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                        </div>
                        <div class="line">
                            <span class="country"><i class="fas fa-flag"></i><?php the_field('country') ?></span>
                            <a href="<?php the_field('review_link') ?>"><i class="fab fa-amazon"></i><?php the_field('review_link_text') ?></a>
                        </div>
                        <p class="text"><?php the_field('review_text') ?></p>
                    </div>

                <?php
            }
            wp_reset_postdata();
            ?>

        </div>

    </div>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/parsley2.png" alt="" class="parsley">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/tomato.png" alt="" class="tomato">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/shrimp.png" alt="" class="shrimp">
</section>