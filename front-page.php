<?php
    get_header('home');
?>

<body>

<div class="wrapper">

    <section class="sect1">

        <div class="header-top display_none">
            <div class="container">
                <p><?php the_field('text_on_top_header') ?></p>
                <a href="#" class="close">
                    <span></span><span></span>
                </a>
            </div>
        </div>

        <?php get_template_part( 'template-parts/header' ); ?>

        <div class="container container-arrow">
            <div class="arrow">
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="sect1-slick">
            <?php $hero = get_field('first_block_slide_1');
            if( $hero ): ?>

                <div class="slider1 slider1_1">
                    <div class="container">
                        <div class="content">
                            <h1 data-aos="fade-right"
                                data-aos-delay="300"
                                data-aos-duration="1000"><?php echo $hero['title']; ?></h1>
                            <h2><?php echo $hero['title2']; ?></h2>
                            <a href="<?php echo $hero['link']; ?>" class="button"><?php echo $hero['button_text']; ?><span class="back"></span></a>
                        </div>
                    </div>
                    <div class="container container-bottom">
                        <div class="slider-lines">
                            <div class="front"></div>
                            <div class="back"></div>
                        </div>
                    </div>
                    <style>
                        .sect1-slick .slider1_1{
                            background-image: url(<?php echo $hero['photo']; ?>) ;
                            background-position: top center;
                            background-repeat: no-repeat;
                            -webkit-background-size: cover;
                            background-size: cover;
                        }
                        @media (max-width: 1024px) {
                            .sect1-slick .slider1_1{
                                background-image: url(<?php echo $hero['photo_mob']; ?>) ;
                                background-position: bottom center;
                            }
                        }
                    </style>
                </div>

            <?php endif;
            ?>
            <?php $hero = get_field('first_block_slide_2');
            if( $hero ): ?>

                <div class="slider1 slider1_2">
                    <div class="container">
                        <div class="content">
                            <h1 data-aos="fade-right"
                                data-aos-delay="300"
                                data-aos-duration="1000"><?php echo $hero['title']; ?></h1>
                            <h2><?php echo $hero['title2']; ?></h2>
                            <a href="<?php echo $hero['link']; ?>" class="button"><?php echo $hero['button_text']; ?><span class="back"></span></a>
                        </div>
                    </div>
                    <div class="container container-bottom">
                        <div class="slider-lines">
                            <div class="front"></div>
                            <div class="back"></div>
                        </div>
                    </div>
                    <style>
                        .sect1-slick .slider1_2{
                            background-image: url(<?php echo $hero['photo']; ?>) ;
                            background-position: top center;
                            background-repeat: no-repeat;
                            -webkit-background-size: cover;
                            background-size: cover;
                        }
                        @media (max-width: 1024px) {
                            .sect1-slick .slider1_2{
                                background-image: url(<?php echo $hero['photo_mob']; ?>) ;
                                background-position: bottom center;
                            }
                        }
                    </style>
                </div>

            <?php endif;
            ?>
            <?php $hero = get_field('first_block_slide_3');
            if( $hero ): ?>

                <div class="slider1 slider1_3">
                    <div class="container">
                        <div class="content">
                            <h1 data-aos="fade-right"
                                data-aos-delay="300"
                                data-aos-duration="1000"><?php echo $hero['title']; ?></h1>
                            <h2><?php echo $hero['title2']; ?></h2>
                            <a href="<?php echo $hero['link']; ?>" class="button"><?php echo $hero['button_text']; ?><span class="back"></span></a>
                        </div>
                    </div>
                    <div class="container container-bottom">
                        <div class="slider-lines">
                            <div class="front"></div>
                            <div class="back"></div>
                        </div>
                    </div>
                    <style>
                        .sect1-slick .slider1_3{
                            background-image: url(<?php echo $hero['photo']; ?>) ;
                            background-position: top center;
                            background-repeat: no-repeat;
                            -webkit-background-size: cover;
                            background-size: cover;
                        }
                        @media (max-width: 1024px) {
                            .sect1-slick .slider1_3{
                                background-image: url(<?php echo $hero['photo_mob']; ?>) ;
                                background-position: bottom center;
                            }
                        }
                    </style>
                </div>

            <?php endif;
            ?>
        </div>
    </section>

    <section class="sect2">

        <?php get_template_part( 'template-parts/fixed', 'header' ); ?>

        <div class="container">
            <h2 data-aos="fade-right"
                data-aos-delay="300"
                data-aos-duration="1000">
                Special offers
            </h2>
            <div class="flex row">

                <!-- get acf-group -->
                <?php $hero = get_field('item1');
                if( $hero ): ?>
                    <a href="<?php echo $hero['link']; ?>" class="item deal_of_the_month col-6">
                        <h2 class="title">Deal of <br />the month</h2>
                        <div class="flex">
                            <div class="img-block">
                                <img src="<?php echo $hero['image']; ?>" alt="">
                            </div>
                            <div class="descriptions">
                                <h3><?php echo $hero['title']; ?></h3>
                                <div class="stars <?php echo $hero['amount_of_stars']; ?>">
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                </div>
                                <div class="flex">
                                    <div class="price-block">
                                        <span class="price"><?php echo $hero['price']; ?></span>
                                        <span class="old-price"><?php echo $hero['price_old']; ?></span>
                                    </div>
                                    <p class="button black md-trigger js-button-buy" data-modal="modal-where-to-buy"

                                        <?php
                                        if(  $hero['amazon_link'] ) { ?>
                                            data-amazon="<?php echo $hero['amazon_link']; ?>"
                                        <?php }
                                        if( $hero['ebay_link'] ) { ?>
                                            data-ebay="<?php echo $hero['ebay_link']; ?>"
                                        <?php }?>

                                    >
                                        <span class="back"></span>
                                        Buy now

                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endif;
                ?>

                <!-- get acf-group -->
                <?php $hero = get_field('item2');
                if( $hero ): ?>
                    <a href="<?php echo $hero['link']; ?>" class="item top_sales col-3">
                        <div class="fire">
                            <i class="fas fa-fire"></i> top sales
                        </div>
                        <div class="img-block">
                            <img src="<?php echo $hero['image']; ?>" alt="">
                        </div>
                        <div class="descriptions">
                            <h3><?php echo $hero['title']; ?></h3>
                            <div class="stars <?php echo $hero['amount_of_stars']; ?>">
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                            </div>
                            <div class="flex">
                                <span class="price"><?php echo $hero['price']; ?></span>
                                <p class="button black md-trigger js-button-buy" data-modal="modal-where-to-buy"

                                    <?php
                                    if(  $hero['amazon_link'] ) { ?>
                                        data-amazon="<?php echo $hero['amazon_link']; ?>"
                                    <?php }
                                    if( $hero['ebay_link'] ) { ?>
                                        data-ebay="<?php echo $hero['ebay_link']; ?>"
                                    <?php }?>

                                >
                                    <span class="back"></span>
                                    Buy now

                                </p>
                            </div>
                        </div>
                    </a>
                <?php endif;
                ?>

                <!-- get acf-group -->
                <?php $hero = get_field('item3');
                if( $hero ): ?>
                    <a href="<?php echo $hero['link']; ?>" class="item top_sales col-3">
                        <div class="fire">
                            <i class="fas fa-fire"></i> top sales
                        </div>
                        <div class="img-block">
                            <img src="<?php echo $hero['image']; ?>" alt="">
                        </div>
                        <div class="descriptions">
                            <h3><?php echo $hero['title']; ?></h3>
                            <div class="stars <?php echo $hero['amount_of_stars']; ?>">
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                            </div>
                            <div class="flex">
                                <span class="price"><?php echo $hero['price']; ?></span>
                                <p class="button black md-trigger js-button-buy" data-modal="modal-where-to-buy"

                                    <?php
                                    if(  $hero['amazon_link'] ) { ?>
                                        data-amazon="<?php echo $hero['amazon_link']; ?>"
                                    <?php }
                                    if( $hero['ebay_link'] ) { ?>
                                        data-ebay="<?php echo $hero['ebay_link']; ?>"
                                    <?php }?>

                                >
                                    <span class="back"></span>
                                    Buy now

                                </p>
                            </div>
                        </div>
                    </a>
                <?php endif;
                ?>

            </div>
            <div class="text-center">
                <a href="<?php echo home_url(); ?>/catalogue" class="button black"><span class="back"></span> View full catalogue</a>
            </div>
        </div>
        <img class="pepper" src="<?php echo get_stylesheet_directory_uri() ?>/img/pepper.png" alt="">
        <img class="limes" src="<?php echo get_stylesheet_directory_uri() ?>/img/limes.png" alt="">
        <img class="parsley" src="<?php echo get_stylesheet_directory_uri() ?>/img/parsley.png" alt="">
    </section>

    <section class="sect3">
        <div class="container">
            <h2 data-aos="fade-right"
                data-aos-delay="300"
                data-aos-duration="1000">
                Categories
            </h2>
            <div class="flex row">
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Steel-Woks" class="item col-4">
                    <h3>Steel Woks</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/steel-woks.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Steel-Pans" class="item col-4">
                    <h3>Steel Pans</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/steel-pans.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Cast-Iron-Woks" class="item col-4">
                    <h3>Cast Iron Woks</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/iron-woks.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Cast-Iron-Pans" class="item col-4">
                    <h3>Cast Iron Pans</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/iron-pans.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Lids" class="item col-4">
                    <h3>Lids</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/lids.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Accessories" class="item col-4">
                    <h3>Accessories</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/accessories.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
            </div>
        </div>
        <img class="bayleaf" src="<?php echo get_stylesheet_directory_uri() ?>/img/bayleaf.png" alt="">
        <img class="bazil" src="<?php echo get_stylesheet_directory_uri() ?>/img/bazil.png" alt="">
    </section>

    <section class="sect4">
        <div class="container">
            <div class="flex row">
                <div class="col-9">
                    <h2 data-aos="fade-right"
                        data-aos-delay="300"
                        data-aos-duration="1000">
                        Find out more about Yosukata
                    </h2>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
                </div>
                <div class="col-3 button-block">
                    <a target="_blank" href="<?php echo home_url(); ?>/blog" class="button black"><span class="back"></span>See all</a>
                </div>
            </div>
            <div class="sect4-slick">
                <div class="slider">
                    <?php
                    $posts = get_posts( array(
                        'numberposts' => 1,
                        'post_type'   => 'blog',
                        'tag' => 'slide-1',
                        'suppress_filters' => true,
                    ));
                    foreach( $posts as $post ){ setup_postdata($post);
                        ?>
                        <a href="<?php echo get_permalink(); ?>" class="slider-item slider-row blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                            <p class="title">
                                <span class="text"><?php echo the_field('blog_text') ?></span>
                                <?php the_title() ?>
                            </p>
                            <i class="fas icon"></i>
                            <div class="background"></div>
                        </a>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                    
                    <div class="slider-column">
                        <?php
                            $posts = get_posts( array(
                                'numberposts' => 1,
                                'post_type'   => 'blog',
                                'tag' => 'slide-2',
                                'suppress_filters' => true,
                            ));
                            foreach( $posts as $post ){ setup_postdata($post);
                                ?>
                                <a href="<?php echo get_permalink(); ?>" class="slider-item slider-column-top blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                    <p class="title">
                                        <span class="text"><?php echo the_field('blog_text') ?></span>
                                        <?php the_title() ?>
                                    </p>
                                    <i class="fas icon"></i>
                                    <div class="background"></div>
                                </a>
                                <?php
                            }
                            wp_reset_postdata();
                        ?>

                        <?php
                            $posts = get_posts( array(
                                'numberposts' => 1,
                                'post_type'   => 'blog',
                                'tag' => 'slide-3',
                                'suppress_filters' => true,
                            ));
                            foreach( $posts as $post ){ setup_postdata($post);
                                ?>
                                <a href="<?php echo get_permalink(); ?>" class="slider-item slider-column-bottom blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                    <p class="title">
                                        <span class="text"><?php echo the_field('blog_text') ?></span>
                                        <?php the_title() ?>
                                    </p>
                                    <i class="fas icon"></i>
                                    <div class="background"></div>
                                </a>
                                <?php
                            }
                            wp_reset_postdata();
                        ?>

                    </div>
                </div>
                <div class="slider">
                    <?php
                    $posts = get_posts( array(
                        'numberposts' => 1,
                        'post_type'   => 'blog',
                        'tag' => 'slide-4',
                        'suppress_filters' => true,
                    ));
                    foreach( $posts as $post ){ setup_postdata($post);
                        ?>
                        <a href="<?php echo get_permalink(); ?>" class="slider-item slider-row blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                            <p class="title">
                                <span class="text"><?php echo the_field('blog_text') ?></span>
                                <?php the_title() ?>
                            </p>
                            <i class="fas icon"></i>
                            <div class="background"></div>
                        </a>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                    
                    <div class="slider-column">
                        <?php
                            $posts = get_posts( array(
                                'numberposts' => 1,
                                'post_type'   => 'blog',
                                'tag' => 'slide-5',
                                'suppress_filters' => true,
                            ));
                            foreach( $posts as $post ){ setup_postdata($post);
                                ?>
                                <a href="<?php echo get_permalink(); ?>" class="slider-item slider-column-top blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                    <p class="title">
                                        <span class="text"><?php echo the_field('blog_text') ?></span>
                                        <?php the_title() ?>
                                    </p>
                                    <i class="fas icon"></i>
                                    <div class="background"></div>
                                </a>
                                <?php
                            }
                            wp_reset_postdata();
                        ?>

                        <?php
                            $posts = get_posts( array(
                                'numberposts' => 1,
                                'post_type'   => 'blog',
                                'tag' => 'slide-6',
                                'suppress_filters' => true,
                            ));
                            foreach( $posts as $post ){ setup_postdata($post);
                                ?>
                                <a href="<?php echo get_permalink(); ?>" class="slider-item slider-column-bottom blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                    <p class="title">
                                        <span class="text"><?php echo the_field('blog_text') ?></span>
                                        <?php the_title() ?>
                                    </p>
                                    <i class="fas icon"></i>
                                    <div class="background"></div>
                                </a>
                                <?php
                            }
                            wp_reset_postdata();
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="sect4-slick-mobile">
                <div class="slider">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => 1,
                            'post_type'   => 'blog',
                            'tag' => 'slide-1',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                            <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="slider">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => 1,
                            'post_type'   => 'blog',
                            'tag' => 'slide-2',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                            <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="slider">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => 1,
                            'post_type'   => 'blog',
                            'tag' => 'slide-3',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                            <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="slider">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => 1,
                            'post_type'   => 'blog',
                            'tag' => 'slide-4',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                            <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="slider">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => 1,
                            'post_type'   => 'blog',
                            'tag' => 'slide-5',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                            <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="slider">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => 1,
                            'post_type'   => 'blog',
                            'tag' => 'slide-6',
                            'suppress_filters' => true,
                        ));
                        foreach( $posts as $post ){ setup_postdata($post);
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                            <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
            <!--.flex-->
        </div>
    </section>

    <section class="sect5" id="about">
        <div class="container">
            <div class="flex row">
                <div class="col-6">
                    <h2 data-aos="fade-right"
                        data-aos-delay="300"
                        data-aos-duration="1000">
                        About
                    </h2>
                    <p>When it comes to dish excellence, there is never a detail that we overlook. Although more and more
                        of us care about organic, healthy ingredients that are rich in taste and flavors, but forget to pay
                        attention to kitchen cooking utensils. <span class="bold">Nature has provided us with solution that has been forgotten
                                        in the pursuit of convenience: fire and iron.</span> Peek inside the kitchen of any restaurant and you will
                        find cast iron and carbon steel cooking ware in the place of non-stick coated pans. It is a key for
                        cooking tasteful dishes.
                        <br /><br />
                        We are chefs who care about flavor and can distinguish between a pan that is high-quality and one
                        that is cheap tin. We are constantly sourcing and testing in order to distill the pans that make it
                        possible to create culinary masterpieces. We founded the Yosukata company to help consumers
                        revitalize the benefits of natural cooking ware.</p>
                </div>
            </div>

        </div>
    </section>

    <?php get_template_part( 'template-parts/review' ); ?>

    <section class="sect7">
        <div class="container text-center">
            <p class="title">
                Want to save money while you shop?
            </p>
            <p class="text">
                Get your discount instantly, <br />
                just press the button!
            </p>
            <a class="button md-trigger" data-modal="modal-coupon"><span class="back"></span>Get a coupon</a>
        </div>
    </section>

    <section class="sect8" id="recipes">
        <div class="container">
            <div class="flex row">
                <div class="col-9">
                    <h2 data-aos="fade-right"
                        data-aos-delay="300"
                        data-aos-duration="1000">
                        Check out our recipes!
                    </h2>
                </div>
                <div class="col-3"><a target="_blank" href="<?php echo home_url(); ?>/recipes" class="button black"><span class="back"></span>All Recipes</a></div>
            </div>
            <div class="sect8-slick">
                <?php
                $posts = get_posts( array(
                    'posts_per_page' => 6,
                    'post_type'   => 'recipes',
//                        'tag' => 'more_from_blog',
                    'suppress_filters' => true,
                ));
                foreach( $posts as $post ){ setup_postdata($post);
                    ?>
                    <a href="<?php echo get_permalink(); ?>" class="slide">
                        <span class="time"><?php the_field('time'); ?></span>
                        <div class="img-block" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect8-img3.jpg')"></div>
                        <div class="slide-title">
                            <span>Difficulty: <span class="value"><?php the_field('difficulty'); ?></span></span>
                            <span>Servings: <span class="value"><?php the_field('serving'); ?></span></span>
                            <h3><?php the_title(); ?></h3>
                            <p class="button"><span class="back"></span> View Recipe</p>
                        </div>
                    </a>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="bottom-text">
                <p class="js-show-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book. It has survived not only
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book. It has survived not only
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <a class="show js-show">Show full text</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>