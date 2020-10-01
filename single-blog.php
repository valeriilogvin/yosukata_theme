<?php
/**
 * The template for displaying single posts of blog
 */

if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>

    <div class="blog-article">
        <div class="sect2 center">
            <div class="container flex">
                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();

                    if( have_rows('blog-article') ):

                        while ( have_rows('blog-article') ) : the_row();

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

                <div class="share col-8">
                    <div>
                        <p>Share</p>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i> </a>
                        <a href=""><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/garlic.png" alt="" class="garlic">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/garlic.png" alt="" class="garlic2">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/big_pepper.png" alt="" class="big_pepper">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/big_pepper.png" alt="" class="big_pepper1">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/big_pepper.png" alt="" class="big_pepper2">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/limes.png" alt="" class="limes">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/limes.png" alt="" class="limes1">
        </div>
        <div class="sect-blog-bottom">
            <div class="container">
                <h2 data-aos="fade-right"
                    data-aos-delay="300"
                    data-aos-duration="1000">
                    More from Blog
                </h2>
                <div class="sect-blog-bottom-slider">
                    <div class="slider">
                        <a href="#" class="slider-item video" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg');">
                            <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                            <p class="title">About Yosukata. Brand traditions and priorities</p>
                            <i class="fas fa-video"></i>
                        </a>
                    </div>
                    <div class="slider">
                        <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col1.png.jpg');">
                            <p class="title">Sesoning&Caring. Method #1
                                <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... </span>
                            </p>
                            <i class="fas fa-align-left"></i>
                        </a>
                    </div>
                    <div class="slider">
                        <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col2.png.jpg');">
                            <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                            <p class="title">Cook like a Chef! Wok cooking tips&tricks</p>
                            <i class="fas fa-video"></i>
                        </a>
                    </div>
                    <div class="slider">
                        <a href="#" class="slider-item video"
                           style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg')">
                            <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                            <p class="title">About Yosukata. Brand traditions and priorities</p>
                            <i class="fas fa-video"></i>
                        </a>
                    </div>
                    <div class="slider">
                        <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col1.png.jpg');">
                            <p class="title">Sesoning&Caring. Method #1
                                <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... </span>
                            </p>
                            <i class="fas fa-align-left"></i>
                        </a>
                    </div>
                    <div class="slider">
                        <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col2.png.jpg');">
                            <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                            <p class="title">Cook like a Chef! Wok cooking tips&tricks</p>
                            <i class="fas fa-video"></i>
                        </a>
                    </div>
                    <div class="slider">
                        <a href="#" class="slider-item video"
                           style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg');">
                            <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                            <p class="title">About Yosukata. Brand traditions and priorities</p>
                            <i class="fas fa-video"></i>
                        </a>
                    </div>
                    <div class="slider">
                        <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col1.png.jpg');">
                            <p class="title">Sesoning&Caring. Method #1
                                <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... </span>
                            </p>
                            <i class="fas fa-stream"></i>
                        </a>
                    </div>
                    <div class="slider">
                        <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col2.png.jpg');">
                            <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                            <p class="title">Cook like a Chef! Wok cooking tips&tricks</p>
                            <i class="fas fa-video"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
