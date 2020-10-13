<?php
/**
 * The template for displaying single posts of recipes
 */

if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>

    <div class="recipes-article">
        <div class="sect-main">
            <div class="container ">
                <div class="flex row">
                    <div class="col-5" style="background-image: url('<?php the_field('recipe_main_photo'); ?>'); background-repeat: no-repeat; background-size: cover"></div>
                    <div class="col-7">
                        <h1><?php the_title(); ?></h1>
                        <div class="flex info" >
                            <span class="difficulty">Difficulty <span class="text"><?php the_field('difficulty'); ?></span></span>
                            <span class="serving">Serving <span class="text"><?php the_field('serving'); ?></span></span>
                            <span class="time"><span class="text"><?php the_field('time'); ?></span></span>
                        </div>
                        <div class="ingredients">
                            <p class="title">Ingredients</p>
                            <!-- acf repeater -->
                            <?php
                            if( get_field('ingredients') ) {
                                echo '<ul>';
                                while( the_repeater_field('ingredients') ) {
                                    echo '<li>' . get_sub_field('ingredient') .'</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-8 instructions">
                    <p class="title">Instructions</p>
                    <?php
                    if( get_field('instructions') ) {
                        echo '<ul>';
                        while( the_repeater_field('instructions') ) {
                            echo '<li><span class="num">' . get_sub_field('num') .'</span>' . get_sub_field('instruction') .'</li>';
                        }
                        echo '</ul>';
                    }
                    ?>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/limes.png" alt="" class="limes">
        </div>
        <div class="sect2 center" style="background: #f7f7f7;">
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

            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/avocado.png" alt="" class="avocado">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/big_pepper.png" alt="" class="big_pepper">

            </div>
        </div>
        <div class="more-recipes">
            <div class="container">
                <div class="flex row">
                    <div class="col-9">
                        <h2 data-aos="fade-right"
                            data-aos-delay="300"
                            data-aos-duration="1000">
                            Check out our recipes!
                        </h2>
                    </div>
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
            </div>
        </div>
    </div>


<?php
get_footer();
