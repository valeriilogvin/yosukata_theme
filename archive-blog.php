<?php
/**
 * The template for displaying archive pages of recipes
 */

if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>

    <div class="blog">
        <div class="container">
            <div class="flex row">
                <div class="col-6">
                    <h2>Blog</h2>
                </div>
                <div class="col-6 blog-buttons">
                    <a href="#" class="blog-button active">All</a>
                    <a href="#" class="blog-button">Articles</a>
                    <a href="#" class="blog-button">Video</a>
                </div>
            </div>
        </div>
        <div class="container container-blog">
            <div class="flex row">
                <?php
                $posts = get_posts( array(
                    'posts_per_page' => 6,
                    'post_type'   => 'blog',
                    'suppress_filters' => true,
                ));
                foreach( $posts as $post ){ setup_postdata($post);
                    ?>
                    <div class="col-6">
                        <a href="<?php echo get_permalink(); ?>" class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>');">
                            <i class="fas icon"></i>
                            <div class="background"></div>
                        </a>
                        <p class="title"><?php echo the_field('blog_title') ?></p>
                        <p class="text"><?php echo the_field('blog_text') ?></p>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();