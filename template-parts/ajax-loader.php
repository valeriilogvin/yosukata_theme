<?php
function true_load_posts()
{

    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1; // next page
    $args['post_status'] = 'publish';


    $post_type = isset($_POST['post_type']) ? $_POST['post_type'] : '';
//die('-'.$sm_post_type);

    if ($post_type) {
//		$args['paged'] = 1;
        if ($post_type == 'articles') {
            $args['meta_key'] = 'blog_type_of_post';
            $args['meta_value'] = 'articles';
        }
        if ($post_type == 'video') {
            $args['meta_key'] = 'blog_type_of_post';
            $args['meta_value'] = 'video';
        }
    }
//die('ok');
//print_r($args);
    $sm_post_type = isset($args['post_type']) ? $args['post_type'] : '';

    query_posts($args);
    if (have_posts()) :
        while (have_posts()): the_post();
            if ($sm_post_type == 'recipes') {
                ?>
                <a href="<?php echo the_permalink(); ?>" class="col-6 recipe"
                   style="background-image: url('<?php the_field('recipe_main_photo'); ?>')">
                    <div class="description">
                        <span class="time"><?php the_field('time'); ?></span>
                        <span class="info">
                                <span class="info-name">Difficulty <span
                                            class="info-text"><?php the_field('difficulty'); ?></span></span>
                                <span class="info-name">Servings <span
                                            class="info-text"><?php the_field('serving'); ?></span></span>
                            </span>
                        <p class="recipe-title"><?php the_title() ?></p>
                        <p class="button black"><span class="back"></span>View recipe</p>
                    </div>
                </a>
                <?
            } else {
                ?>
                <a href="<?php the_permalink(); ?>" class="col-6">
                    <div class="slider-item blog-article <?php the_field('blog_type_of_post') ?>"
                         style="background-image: url('<?php the_field('blog_main_photo') ?>');">
                        <i class="fas icon"></i>
                        <div class="background"></div>
                    </div>
                    <p class="title"><?php the_title() ?></p>
                    <p class="text"><?php the_field('blog_text') ?></p>
                </a>
                <?php
            }

        endwhile;

    endif;

    die();
}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');