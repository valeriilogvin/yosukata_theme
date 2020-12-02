<section class="sect6">
    <div class="container">
        <h2 data-aos="fade-right"
            data-aos-delay="300"
            data-aos-duration="1000">
            <?php the_field('reviews_title', 20) ?>
        </h2>

        <div class="sect6-slick">

            <!-- acf объект записи -->
            <?php
            $post_objects = get_field('review-catalogue');
            if ($post_objects):
                foreach ($post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT)
                    ?>
                    <?php setup_postdata($post); ?>

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
                            <a href="<?php the_field('review_link') ?>"><i
                                        class="fab fa-amazon"></i><?php the_field('review_link_text') ?></a>
                            <span class="country"><?php the_field('name') ?></span>

                            <?php

                            // переменные
                            $post_id = get_field('catalogue-link', false, false);

                            // проверяем на существование поля
                            if ($post_id): ?>
                                <a href="<?php get_the_permalink($post_id); ?>"><?php get_the_title($post_id); ?></a>
                            <?php endif; ?>

                        </div>
                        <p class="text"><?php the_field('review_text') ?></p>
                    </div>

                <?php endforeach;
                wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде
                ?>
            <?php endif; ?>

        </div>

    </div>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/parsley2.png" alt="" class="parsley">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/tomato.png" alt="" class="tomato">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/shrimp.png" alt="" class="shrimp">
</section>