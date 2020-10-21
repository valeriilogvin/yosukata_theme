<?php
/**
 * Template Name: Catalogue
 */

if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>

    <div class="container catalogue">
        ыыы
        <h2><?php the_field('catalogue_title') ?></h2>
        <div class="flex row">
            <div class="col-2 js-col-2">
                <ul class="fixed-catalogue js-fixed-catalogue">
                    <li><a href="#Steel-Woks"><?php the_field('categories_title_1',20) ?></a></li>
                    <li><a href="#Steel-Pans"><?php the_field('categories_title_2',20) ?></a></li>
                    <li><a href="#Cast-Iron-Woks"><?php the_field('categories_title_3',20) ?></a></li>
                    <li><a href="#Cast-Iron-Pans"><?php the_field('categories_title_4',20) ?></a></li>
                    <li><a href="#Lids"><?php the_field('categories_title_5',20) ?></a></li>
                    <li><a href="#Accessories"><?php the_field('categories_title_6',20) ?></a></li>
                </ul>
            </div>

            <div class="col-10">
                <div id="Steel-Woks" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3><?php the_field('categories_title_1',20) ?></h3>
                        <span class="line"></span>
                    </div>
                    <div class="flex row">

                        <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'post_type'   => 'catalogue',
                            'tag' => 'steel-woks',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="item col-3">
                                <div class="img-block"><img src="<?php the_field('main_photo'); ?>" alt=""></div>
                                <div class="descriptions">
                                    <h3><?php the_title() ?></h3>
                                    <div class="stars <?php the_field('stars'); ?>">
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                    <div class="flex">
                                        <span class="price"><?php the_field('price'); ?></span>
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
                <div id="Steel-Pans" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3><?php the_field('categories_title_2',20) ?></h3>
                        <span class="line"></span>
                    </div>
                    <div class="flex row">
                        <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'post_type'   => 'catalogue',
                            'tag' => 'steel-pans',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="item col-3">
                                <div class="img-block"><img src="<?php the_field('main_photo'); ?>" alt=""></div>
                                <div class="descriptions">
                                    <h3><?php the_title() ?></h3>
                                    <div class="stars <?php the_field('stars'); ?>">
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                    <div class="flex">
                                        <span class="price"><?php the_field('price'); ?></span>
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
                <div id="Cast-Iron-Woks" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3><?php the_field('categories_title_3',20) ?></h3>
                        <span class="line"></span>
                    </div>
                    <div class="flex row">
                        <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'post_type'   => 'catalogue',
                            'tag' => 'cast-iron-woks',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="item col-3">
                                <div class="img-block"><img src="<?php the_field('main_photo'); ?>" alt=""></div>
                                <div class="descriptions">
                                    <h3><?php the_title() ?></h3>
                                    <div class="stars <?php the_field('stars'); ?>">
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                    <div class="flex">
                                        <span class="price"><?php the_field('price'); ?></span>
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
                <div id="Cast-Iron-Pans" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3><?php the_field('categories_title_4',20) ?></h3>
                        <span class="line"></span>
                    </div>

                    <div class="flex row">
                        <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'post_type'   => 'catalogue',
                            'tag' => 'cast-iron-pans',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="item col-3">
                                <div class="img-block"><img src="<?php the_field('main_photo'); ?>" alt=""></div>
                                <div class="descriptions">
                                    <h3><?php the_title() ?></h3>
                                    <div class="stars <?php the_field('stars'); ?>">
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                    <div class="flex">
                                        <span class="price"><?php the_field('price'); ?></span>
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
                <div id="Lids" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3><?php the_field('categories_title_5',20) ?></h3>
                        <span class="line"></span>
                    </div>
                    <div class="flex row">
                        <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'post_type'   => 'catalogue',
                            'tag' => 'lids',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="item col-3">
                                <div class="img-block"><img src="<?php the_field('main_photo'); ?>" alt=""></div>
                                <div class="descriptions">
                                    <h3><?php the_title() ?></h3>
                                    <div class="stars <?php the_field('stars'); ?>">
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                    <div class="flex">
                                        <span class="price"><?php the_field('price'); ?></span>
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
                <div id="Accessories" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3><?php the_field('categories_title_6',20) ?></h3>
                        <span class="line"></span>
                    </div>
                    <div class="flex row">
                        <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'post_type'   => 'catalogue',
                            'tag' => 'accessories',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="item col-3">
                                <div class="img-block"><img src="<?php the_field('main_photo'); ?>" alt=""></div>
                                <div class="descriptions">
                                    <h3><?php the_title() ?></h3>
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
        </div>
    </div>

    <script defer >

    </script>
<?php


get_footer();