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
                <?php the_field('special_offers_title') ?>
            </h2>
            <div class="flex row">

                <?php
                $post_objects = get_field('post1');
                if( $post_objects ): ?>
                    <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <a href="<?php echo get_permalink(); ?>" class="item deal_of_the_month col-6">
                            <h2 class="title"><?php the_field('special_offers_deal',20) ?></h2>
                            <div class="flex">
                                <div class="img-block">
                                    <img src="<?php the_field('main_photo') ?>" alt="">
                                </div>
                                <div class="descriptions">
                                    <h3><?php the_field('catalogue_title') ?></h3>
                                    <div class="stars <?php the_field('stars') ?>">
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                    <div class="flex">
                                        <div class="price-block">
                                            <span class="price"><?php the_field('price') ?></span>
                                            <span class="old-price"><?php the_field('price_old') ?></span>
                                        </div>
                                        <p class="button black md-trigger js-button-buy" data-modal="modal-where-to-buy"

                                            <?php
                                            if(  get_field('amazon_link') ) { ?>
                                                data-amazon="<?php the_field('amazon_link') ?>"
                                            <?php }
                                            if(  get_field('ebay_link') ) { ?>
                                                data-ebay="<?php the_field('ebay_link') ?>"
                                            <?php }?>
                                        >
                                            <span class="back"></span>
                                            <?php the_field('special_offers_button',20) ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                <?php endif;
                ?>

                <?php
                $post_objects = get_field('post2');
                if( $post_objects ): ?>
                    <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <a href="<?php echo get_permalink(); ?>" class="item top_sales col-3">
                            <div class="fire">
                                <i class="fas fa-fire"></i> <?php the_field('top_sales',20) ?>
                            </div>
                            <div class="img-block">
                                <img src="<?php the_field('main_photo') ?>" alt="">
                            </div>
                            <div class="descriptions">
                                <h3><?php the_field('catalogue_title') ?></h3>
                                <div class="stars <?php the_field('stars') ?>">
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                </div>
                                <div class="flex">
                                    <span class="price"><?php the_field('price') ?></span>
                                    <p class="button black md-trigger js-button-buy" data-modal="modal-where-to-buy"

                                        <?php
                                        if(  get_field('amazon_link') ) { ?>
                                            data-amazon="<?php the_field('amazon_link') ?>"
                                        <?php }
                                        if(  get_field('ebay_link') ) { ?>
                                            data-ebay="<?php the_field('ebay_link') ?>"
                                        <?php }?>
                                    >
                                        <span class="back"></span>
                                        <?php the_field('special_offers_button',20) ?>

                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                <?php endif;
                ?>


                <?php
                $post_objects = get_field('post3');
                if( $post_objects ): ?>
                    <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <a href="<?php echo get_permalink(); ?>" class="item top_sales col-3">
                            <div class="fire">
                                <i class="fas fa-fire"></i> <?php the_field('top_sales',20) ?>
                            </div>
                            <div class="img-block">
                                <img src="<?php the_field('main_photo') ?>" alt="">
                            </div>
                            <div class="descriptions">
                                <h3><?php the_field('catalogue_title') ?></h3>
                                <div class="stars <?php the_field('stars') ?>">
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                </div>
                                <div class="flex">
                                    <span class="price"><?php the_field('price') ?></span>
                                    <p class="button black md-trigger js-button-buy" data-modal="modal-where-to-buy"

                                        <?php
                                        if(  get_field('amazon_link') ) { ?>
                                            data-amazon="<?php the_field('amazon_link') ?>"
                                        <?php }
                                        if(  get_field('ebay_link') ) { ?>
                                            data-ebay="<?php the_field('ebay_link') ?>"
                                        <?php }?>
                                    >
                                        <span class="back"></span>
                                        <?php the_field('special_offers_button',20) ?>

                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                <?php endif;
                ?>


            </div>
            <div class="text-center">
                <a href="<?php echo home_url(); ?>/catalogue" class="button black"><span class="back"></span><?php the_field('special_offers_button2') ?></a>
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
                <?php the_field('categories_title') ?>
            </h2>
            <div class="flex row">
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Steel-Woks" class="item col-4">
                    <h3><?php the_field('categories_title_1') ?></h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/steel-woks.png" alt="">
                    <p class="button catalogue-button"><span class="back"></span><?php the_field('categories_button') ?></p>
                </a>
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Steel-Pans" class="item col-4">
                    <h3><?php the_field('categories_title_2') ?></h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/steel-pans.png" alt="">
                    <p class="button catalogue-button"><span class="back"></span><?php the_field('categories_button') ?></p>
                </a>
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Cast-Iron-Woks" class="item col-4">
                    <h3><?php the_field('categories_title_3') ?></h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/iron-woks.png" alt="">
                    <p class="button catalogue-button"><span class="back"></span><?php the_field('categories_button') ?></p>
                </a>
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Cast-Iron-Pans" class="item col-4">
                    <h3><?php the_field('categories_title_4') ?></h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/iron-pans.png" alt="">
                    <p class="button catalogue-button"><span class="back"></span><?php the_field('categories_button') ?></p>
                </a>
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Lids" class="item col-4">
                    <h3><?php the_field('categories_title_5') ?></h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/lids.png" alt="">
                    <p class="button catalogue-button"><span class="back"></span><?php the_field('categories_button') ?></p>
                </a>
                <a target="_blank" href="<?php echo home_url(); ?>/catalogue/#Accessories" class="item col-4">
                    <h3><?php the_field('categories_title_6') ?></h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/accessories.png" alt="">
                    <p class="button catalogue-button"><span class="back"></span><?php the_field('categories_button') ?></p>
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
                        <?php the_field('find_out_more_title') ?>
                    </h2>
                    <p><?php the_field('find_out_more_text') ?></p>
                </div>
                <div class="col-3 button-block">
                    <a target="_blank" href="<?php echo home_url(); ?>/blog" class="button black"><span class="back"></span><?php the_field('see_all') ?></a>
                </div>
            </div>
            <div class="sect4-slick">
                <div class="slider">

                    <?php
                    $post_objects = get_field('slide_1');
                    if( $post_objects ): ?>
                            <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                                <?php setup_postdata($post); ?>
                                <a href="<?php echo get_permalink(); ?>" class="slider-item slider-row blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                    <p class="title">
                                        <span class="text"><?php echo the_field('blog_text') ?></span>
                                        <?php the_title() ?>
                                    </p>
                                    <i class="fas icon"></i>
                                    <div class="background"></div>
                                </a>
                            <?php endforeach; ?>
                        <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                    <?php endif;
                    ?>

                    
                    <div class="slider-column">
                        <?php
                        $post_objects = get_field('slide_2');
                        if( $post_objects ): ?>
                            <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                                <?php setup_postdata($post); ?>
                                <a href="<?php echo get_permalink(); ?>" class="slider-item slider-column-top blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                    <p class="title">
                                        <span class="text"><?php echo the_field('blog_text') ?></span>
                                        <?php the_title() ?>
                                    </p>
                                    <i class="fas icon"></i>
                                    <div class="background"></div>
                                </a>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                        <?php endif;
                        ?>

                        <?php
                        $post_objects = get_field('slide_2');
                        if( $post_objects ): ?>
                            <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                                <?php setup_postdata($post); ?>
                                <a href="<?php echo get_permalink(); ?>" class="slider-item slider-column-bottom blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                    <p class="title">
                                        <span class="text"><?php echo the_field('blog_text') ?></span>
                                        <?php the_title() ?>
                                    </p>
                                    <i class="fas icon"></i>
                                    <div class="background"></div>
                                </a>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                        <?php endif;
                        ?>

                    </div>
                </div>
                <div class="slider">

                    <?php
                    $post_objects = get_field('slide_3');
                    if( $post_objects ): ?>
                        <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item slider-row blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                    <?php endif;
                    ?>


                    <div class="slider-column">
                        <?php
                        $post_objects = get_field('slide_4');
                        if( $post_objects ): ?>
                            <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                                <?php setup_postdata($post); ?>
                                <a href="<?php echo get_permalink(); ?>" class="slider-item slider-column-top blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                    <p class="title">
                                        <span class="text"><?php echo the_field('blog_text') ?></span>
                                        <?php the_title() ?>
                                    </p>
                                    <i class="fas icon"></i>
                                    <div class="background"></div>
                                </a>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                        <?php endif;
                        ?>

                        <?php
                        $post_objects = get_field('slide_5');
                        if( $post_objects ): ?>
                            <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                                <?php setup_postdata($post); ?>
                                <a href="<?php echo get_permalink(); ?>" class="slider-item slider-column-bottom blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                    <p class="title">
                                        <span class="text"><?php echo the_field('blog_text') ?></span>
                                        <?php the_title() ?>
                                    </p>
                                    <i class="fas icon"></i>
                                    <div class="background"></div>
                                </a>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                        <?php endif;
                        ?>

                    </div>
                </div>
            </div>
            <div class="sect4-slick-mobile">
                <div class="slider">
                    <?php
                    $post_objects = get_field('slide_1');
                    if( $post_objects ): ?>
                        <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                    <?php endif;
                    ?>
                </div>
                <div class="slider">
                    <?php
                    $post_objects = get_field('slide_2');
                    if( $post_objects ): ?>
                        <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                    <?php endif;
                    ?>
                </div>
                <div class="slider">
                    <?php
                    $post_objects = get_field('slide_3');
                    if( $post_objects ): ?>
                        <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                    <?php endif;
                    ?>
                </div>
                <div class="slider">
                    <?php
                    $post_objects = get_field('slide_4');
                    if( $post_objects ): ?>
                        <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                    <?php endif;
                    ?>
                </div>
                <div class="slider">
                    <?php
                    $post_objects = get_field('slide_5');
                    if( $post_objects ): ?>
                        <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                    <?php endif;
                    ?>
                </div>
                <div class="slider">
                    <?php
                    $post_objects = get_field('slide_6');
                    if( $post_objects ): ?>
                        <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>')">
                                <p class="title">
                                    <span class="text"><?php echo the_field('blog_text') ?></span>
                                    <?php the_title() ?>
                                </p>
                                <i class="fas icon"></i>
                                <div class="background"></div>
                            </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                    <?php endif;
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
                        <?php the_field('about_title') ?>
                    </h2>
                    <p><?php the_field('about_text') ?></p>
                </div>
            </div>

        </div>
    </section>

    <?php get_template_part( 'template-parts/review' ); ?>

    <section class="sect7">
        <div class="container text-center">
            <p class="title"><?php the_field('get_coupon_title') ?></p>
            <p class="text"><?php the_field('get_coupon_text') ?></p>
            <a class="button md-trigger" data-modal="modal-coupon"><span class="back"></span><?php the_field('get_coupon_button') ?></a>
        </div>
    </section>

    <section class="sect8" id="recipes">
        <div class="container">
            <div class="flex row">
                <div class="col-9">
                    <h2 data-aos="fade-right"
                        data-aos-delay="300"
                        data-aos-duration="1000">
                        <?php the_field('recipes_title') ?>
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
                            <p class="button"><span class="back"></span><?php the_field('recipes_button',20) ?></p>
                        </div>
                    </a>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="bottom-text">
                <p class="js-show-text"><?php the_field('recipes_text') ?></p>
                <a class="show js-show">
                    <span class="show"><?php the_field('recipes_button_show') ?></span>
                    <span class="hide"><?php the_field('recipes_button_hide') ?></span>
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>