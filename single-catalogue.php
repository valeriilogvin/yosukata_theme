<?php
/**
 * The template for displaying single posts of catalogue
 */

if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>

    <div class="wok">
        <div class="sect1">
            <div class="container">
                <div class="flex">
                    <div class="col-6 ">

                        <div class="wok-slider-for">
                            <?php
                            if( get_field('catalogue_photo') ) {
                                while( the_repeater_field('catalogue_photo') ) {
                                    echo '
                                        <div class="slide">
                                            <img src="' . get_sub_field('image') .'" alt="">
                                        </div>
                                        ';
                                }
                            }
                            ?>
                        </div>
                        <div class="wok-slider-nav">
                            <?php
                            if( get_field('catalogue_photo') ) {
                                while( the_repeater_field('catalogue_photo') ) {
                                    echo '
                                        <div class="slide">
                                            <img src="' . get_sub_field('image') .'" alt="">
                                        </div>
                                        ';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-6 wok-description">
                        <h2><?php the_field('catalogue_title') ?></h2>
                        <div class="flex">
                            <div class="col-6 flex">
                                <div class="stars <?php the_field('stars') ?>">
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                </div>
                                <span class="review"><?php the_field('review_text'); ?></span>
                                <?php
                                if( get_field('info') ) {
                                    echo '<ul>';
                                    while( the_repeater_field('info') ) {
                                        echo '
                                        <li>
                                            <span class="title">' . get_sub_field('left_col') .'</span>
                                            <span class="text">' . get_sub_field('right_col') .'</span>
                                        </li>
                                        ';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                                <a class="button grey black md-trigger" data-modal="modal-contact"><span class="back"></span>Ask a question</a>
                                <a class="button black md-trigger js-button-buy" data-modal="modal-where-to-buy"

                                    <?php
                                    if( get_field('amazon_link') ) { ?>
                                        data-amazon="<?php the_field('amazon_link');?>"
                                    <?php }
                                    if( get_field('ebay_link') ) { ?>
                                       data-ebay="<?php the_field('ebay_link');?>"
                                    <?php }?>

                                >
                                    <span class="back"></span>
                                    Buy now

                                </a>
                            </div>
                            <div class="col-6 price flex">
                                <div>
                                    <span class="price"><?php the_field('price') ?></span>
                                    <span class="old-price"><?php the_field('old_price') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 wok-description wok-description-mob ">
                        <div class="flex">
                            <div class="col-6 flex">
                                <div class="stars <?php the_field('stars') ?>">
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                </div>
                                <span class="review"><?php the_field('review_text'); ?></span>
                                <?php
                                if( get_field('info') ) {
                                    echo '<ul>';
                                    while( the_repeater_field('info') ) {
                                        echo '
                                        <li>
                                            <span class="title">' . get_sub_field('left_col') .'</span>
                                            <span class="text">' . get_sub_field('right_col') .'</span>
                                        </li>
                                        ';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                                <a href="#" class="button grey black"><span class="back"></span>Ask a question</a>
                                <a class="button black md-trigger js-button-buy" data-modal="modal-where-to-buy"

                                    <?php
                                    if( get_field('amazon_link') ) { ?>
                                        data-amazon="<?php the_field('amazon_link');?>"
                                    <?php }
                                    if( get_field('ebay_link') ) { ?>
                                        data-ebay="<?php the_field('ebay_link');?>"
                                    <?php }?>

                                >
                                    <span class="back"></span>
                                    Buy now

                                </a>
                            </div>
                            <div class="col-6 price flex">
                                <div>
                                    <span class="price"><?php the_field('price') ?></span>
                                    <span class="old-price"><?php the_field('old_price') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sect2 center">
            <div class="container flex">

                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();

                    if( have_rows('recipe-article') ):

                        while ( have_rows('recipe-article') ) : the_row();

                            $row_layout_slug = get_row_layout();

                            echo
                            get_template_part('templates/blog-article/block', $row_layout_slug);

                        endwhile;

                    endif;
                endwhile; else : ?>
                    <div class="section section-not-found">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
            <img class="img-limes" src="<?php echo get_stylesheet_directory_uri() ?>/img/limes.png" alt="">
            <img class="img-big_pepper" src="<?php echo get_stylesheet_directory_uri() ?>/img/big_pepper.png" alt="">
            <img class="img-avocado" src="<?php echo get_stylesheet_directory_uri() ?>/img/avocado.png" alt="">
        </div>

        <?php get_template_part( 'template-parts/review' ); ?>

        <?php get_template_part( 'template-parts/recommended', 'products' ); ?>



    </div>

<?php
get_footer();
