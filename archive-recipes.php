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

    <div class="recipes">
        <div class="container">
            <h2>Recipes</h2>
        </div>
        <div class="container container-recipe">
            <div class="flex row">

                <?php
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'post_type'   => 'recipes',
                    'suppress_filters' => true,
                ));
                foreach( $posts as $post ){ setup_postdata($post);
                    ?>
                    <a href="<?php echo get_permalink(); ?>" class="col-6 recipe" style="background-image: url('<?php the_field('recipe_main_photo'); ?>')">
                        <div class="description">
                            <span class="time"><?php the_field('time'); ?></span>
                            <span class="info">
                                <span class="info-name">Difficulty <span class="info-text"><?php the_field('difficulty'); ?></span></span>
                                <span class="info-name">Servings <span class="info-text"><?php the_field('serving'); ?></span></span>
                            </span>
                            <p class="recipe-title"><?php the_title() ?></p>
                            <p class="button black"><span class="back"></span>View recipe</p>
                        </div>
                    </a>
                    <?php
                }
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>

<?php
get_footer();