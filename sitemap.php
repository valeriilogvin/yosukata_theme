<?php
// Template Name: Site map
if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>

<div class="site-map">
    <div class="container">
        <h2 class="page-title" style="color: #000000;">
            <?php the_title();?>
        </h2>
        <div class="list-type">
            <?php // Страницы
            $pagename = 'Pages';
            $args = array(
                'exclude'      => "48, 338, 334, 132",
                'exclude_tree' => '',
                'title_li'     => '<h3 style="color: #000000;">'.$pagename.'</h3>',
                'sort_column'  => 'menu_order, post_title',
                'sort_order'   => 'ASC',
                'post_type'    => 'page',
            );
            wp_list_pages($args);?>
        </div>
        <div class="list-type">
            <!-- Вызов постов -->
            <?php
            $obj = get_post_type_object( 'catalogue' );
            $pagename = $obj->labels->singular_name;
            echo '<h3 style="color: #000000;">'.$pagename.'</h3>'
            ?>
            <ul>
            <?php
            $posts = get_posts( array(
                'numberposts' => -1,
                'post_type'   => 'catalogue',
                'suppress_filters' => true,
            ));
            foreach( $posts as $post ){ setup_postdata($post);
                ?>
                <a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a>
                <?php
            }
            wp_reset_postdata();
            ?>
            </ul>
        </div>
        <div class="list-type">
            <!-- Вызов постов -->
            <?php
            $obj = get_post_type_object( 'blog' );
            $pagename = $obj->labels->singular_name;
            echo '<h3 style="color: #000000;">'.$pagename.'</h3>'
            ?>
            <ul>
                <?php
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'post_type'   => 'catalogue',
                    'suppress_filters' => true,
                ));
                foreach( $posts as $post ){ setup_postdata($post);
                    ?>
                    <a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </ul>
        </div>
        <div class="list-type">
            <!-- Вызов постов -->
            <?php
            $obj = get_post_type_object( 'recipes' );
            $pagename = $obj->labels->singular_name;
            echo '<h3 style="color: #000000;">'.$pagename.'</h3>'
            ?>
            <ul>
                <?php
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'post_type'   => 'catalogue',
                    'suppress_filters' => true,
                ));
                foreach( $posts as $post ){ setup_postdata($post);
                    ?>
                    <a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
</div>
    <style>
        .site-map{
            margin-bottom: 100px;
        }
        .site-map h2{
            color: #000000;
            font-size: 40px;
            padding-bottom: 70px;
            position: relative;
        }
        .site-map .pagenav{
            display: block;
        }
        .site-map h2:after {
            position: absolute;
            content: url(<?php echo get_stylesheet_directory_uri() ?>/img/headline_pages_curve.png);
            bottom: 50px;
            left: -5px;
        }
        .site-map .list-type + .list-type{
            margin-top: 30px;
        }
        .site-map .list-type a{
            display: block;
            font-size: 16px;
        }
        .site-map .list-type h3{
            margin-bottom: 10px;
            font-weight: bold;
        }

    </style>

<?php get_footer(); ?>