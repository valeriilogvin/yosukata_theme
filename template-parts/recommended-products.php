<div class="wok-sect4">
    <div class="container">
        <h2 data-aos="fade-right"
            data-aos-delay="300"
            data-aos-duration="1000">
            Recommended products
        </h2>
        <div class="flex row recommended-products">
            <?php
            $posts = get_posts( array(
                'numberposts' => 5,
                'post_type'   => 'catalogue',
                'tag' => 'recommended-products',
                'suppress_filters' => true,
            ));
            foreach( $posts as $post ){ setup_postdata($post);
                ?>
                <a href="<?php echo get_permalink(); ?>" class="item col-5 <?php the_field('top_sales') ?>">
                    <div class="img-block"><img src="<?php the_field('main_photo') ?>" alt=""></div>
                    <div class="descriptions">
                        <h3><?php the_title(); ?></h3>
                        <div class="stars <?php the_field('stars') ?>">
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                        </div>
                        <div class="flex">
                            <span class="price"><?php the_field('price') ?></span>
                            <p

                                class="button black md-trigger js-button-buy" data-modal="modal-where-to-buy"

                                <?php
                                if( get_field('amazon_link') ) { ?>
                                    data-amazon="<?php the_field('amazon_link');?>"
                                <?php }
                                if( get_field('ebay_link') ) { ?>
                                    data-ebay="<?php the_field('ebay_link');?>"
                                <?php }?>

                            >
                                <span class="back"></span> Buy now
                            </p>
                        </div>
                    </div>
                </a>

                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>