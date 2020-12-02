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
        <div class="sect-blog-bottom" >
            <div class="container">
                <h2 data-aos="fade-right"
                    data-aos-delay="300"
                    data-aos-duration="1000">
                    More from Blog
                </h2>
                <div class="sect-blog-bottom-slider">
                    <?php
                    $posts = get_posts( array(
                        'posts_per_page' => 6,
                        'post_type'   => 'blog',
                        'orderby'     => 'rand',
                        'tag' => 'more_from_blog',
                        'suppress_filters' => true,
                    ));
                    foreach( $posts as $post ){ setup_postdata($post);
                        ?>
                        <div class="slider">
                                <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php the_field('blog_type_of_post') ?>" style="background-image: url('<?php the_field('blog_main_photo') ?>');">
                                    <i class="fas icon"></i>
                                    <div class="background"></div>
                                </a>
                                <p class="title" style="position: relative; color: #000000; left: 0;bottom: 0;"><?php the_title() ?></p>
                                <p class="text"><?php the_field('blog_text') ?></p>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
