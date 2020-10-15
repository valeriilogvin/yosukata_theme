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
                    <a href="#" class="blog-button active" id="load_all">All</a>
                    <a href="#" class="blog-button" id="load_articles">Articles</a>
                    <a href="#" class="blog-button" id="load_video">Video</a>
                </div>
            </div>
        </div>
        <div class="container container-blog">
            <div class="flex row">
                <?php

$args = array(
                    'posts_per_page' => 6,
                    'post_type'   => 'blog',
                    'suppress_filters' => true,
                );
//$args['paged'] = 2;
                $posts = get_posts( $args );

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
                <div id="loadsm"></div>
            </div>
        </div>
    </div>
<?php if (  1 || $wp_query->max_num_pages > 1 ) : ?>
	<script id="true_loadmore">
	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
	var true_posts = '<?php echo serialize($args); ?>';
	var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
	var post_type = '';
	</script>
<?php endif; ?>
<?php //print_r($wp_query->query_vars);?>

<?php
get_footer();