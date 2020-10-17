<?php

remove_action ('wp_head','rsd_link');
remove_action ('wp_head','wlwmanifest_link');
remove_action ('wp_head','wp_generator');

/**
 * Shortcode
 */
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Deregister JQery
 */
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
    wp_enqueue_script( 'jquery' );
}

/**
 * Menu
 */
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
    register_nav_menu( 'top', 'nav-bar' );
}

function load_fonts()
{
    wp_register_style('et-googleFonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style( 'et-googleFonts');
}
add_action('wp_print_styles', 'load_fonts');

/**
 * Enqueue scripts and styles.
 */
function yosukata_scripts() {
    wp_enqueue_style(
        'yosukata-allMinCSS',
        get_stylesheet_directory_uri() . '/css/all.min.css',
        array(),
        '1.0'
    );
    wp_enqueue_style(
        'yosukata-libsCSS',
        get_stylesheet_directory_uri() . '/css/libs.min.css',
        array(),
        '1.0'
    );
    wp_enqueue_style(
        'yosukata-slick-theme',
        get_stylesheet_directory_uri() . '/slick/slick-theme.css',
        array(),
        ''
    );
    wp_enqueue_style(
        'yosukata-slick-css',
        get_stylesheet_directory_uri() . '/slick/slick.css',
        array(),
        ''
    );
    wp_enqueue_style(
        'yosukata-style',
        get_stylesheet_directory_uri() . '/css/main.css',
        array(),
        '1.0'
    );
    wp_enqueue_style(
        'yosukata-style-pages',
        get_stylesheet_directory_uri() . '/css/pages.css',
        array(),
        '1.0'
    );
    wp_enqueue_style(
        'yosukata-style-form',
        get_stylesheet_directory_uri() . '/css/form.css',
        array(),
        '1.0'
    );
    wp_enqueue_script(
        'yosukata-slick',
        get_template_directory_uri() . '/slick/slick.min.js',
        array(),
        '1.0',
        true
    );

    wp_enqueue_script(
        'yosukata-libs',
        get_template_directory_uri() . '/js/libs.min.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'yosukata-mainJs',
        get_template_directory_uri() . '/js/main.js',
        array(),
        '1.0',
        true
    );
    if ( is_post_type_archive('catalogue') ) {
        wp_enqueue_script(
            'yosukata-catalogue-fixed-menu',
            get_template_directory_uri() . '/js/catalogue-fixed-menu.js',
            array(),
            '1.0',
            true
        );
    }
    if ( is_post_type_archive('blog') ) {
        wp_enqueue_script(
            'true_loadmore',
            get_stylesheet_directory_uri() . '/js/loadmore.js',
            array('jquery') );
    }

}
add_action( 'wp_enqueue_scripts', 'yosukata_scripts' );


/**
 * Post Type
 */
add_action('init', 'my_custom_init');
function my_custom_init(){
    register_post_type('recipes ', array(
        'labels'             => array(
            'name'               => 'Recipes',
            'singular_name'      => 'Recipe',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new recipe',
            'edit_item'          => 'Edit',
            'new_item'           => 'New recipe',
            'view_item'          => 'See the recipe',
            'search_items'       => 'Search',
            'not_found'          => 'Not found',
            'not_found_in_trash' => 'Not found in the cart',
            'parent_item_colon'  => '',
            'menu_name'          => 'Recipes'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-text-page',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array('title','custom-fields')
    ) );

    register_post_type('blog ', array(
        'labels'             => array(
            'name'               => 'Blog',
            'singular_name'      => 'Blog',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new post',
            'edit_item'          => 'Edit',
            'new_item'           => 'New post',
            'view_item'          => 'See the post',
            'search_items'       => 'Search',
            'not_found'          => 'Not found',
            'not_found_in_trash' => 'Not found in the cart',
            'parent_item_colon'  => '',
            'menu_name'          => 'Blog'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-megaphone',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array('title','custom-fields')
    ) );

    register_post_type('catalogue ', array(
        'labels'             => array(
            'name'               => 'Catalogue',
            'singular_name'      => 'Catalogue',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new item',
            'edit_item'          => 'Edit',
            'new_item'           => 'New post',
            'view_item'          => 'See the item',
            'search_items'       => 'Search',
            'not_found'          => 'Not found',
            'not_found_in_trash' => 'Not found in the cart',
            'parent_item_colon'  => '',
            'menu_name'          => 'Catalogue'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-list-view',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array('title','custom-fields')
    ) );

    register_post_type('reviews ', array(
        'labels'             => array(
            'name'               => 'Reviews',
            'singular_name'      => 'Reviews',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new review',
            'edit_item'          => 'Edit',
            'new_item'           => 'New review',
            'view_item'          => 'See the item',
            'search_items'       => 'Search',
            'not_found'          => 'Not found',
            'not_found_in_trash' => 'Not found in the cart',
            'parent_item_colon'  => '',
            'menu_name'          => 'Reviews'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-thumbs-up',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array('title','custom-fields')
    ) );


}

function post_tag_for_pages(){
    register_taxonomy_for_object_type( 'post_tag', 'recipes');
    register_taxonomy_for_object_type( 'post_tag', 'blog');
    register_taxonomy_for_object_type( 'post_tag', 'catalogue');
}

add_action( 'init', 'post_tag_for_pages' );

get_template_part( 'inc/breadcrumbs' );

// Contact Form 7 remove auto added p tags
add_filter('wpcf7_autop_or_not', '__return_false');

function true_load_posts(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // next page
	$args['post_status'] = 'publish';

	$post_type = isset($_POST['post_type']) ? $_POST['post_type'] : '';

	if($post_type){
//		$args['paged'] = 1;

		if($post_type == 'articles'){
          $args['meta_key']		= 'blog_type_of_post';
          $args['meta_value']	= 'articles';
		}
		if($post_type == 'video'){
          $args['meta_key']		= 'blog_type_of_post';
          $args['meta_value']	= 'video';
		}
	}

//print_r($args);

	query_posts( $args );
	if( have_posts() ) :
 
		while( have_posts() ): the_post();
 
//echo 'pm='.get_permalink();
?>
                    <a href="<?php echo get_permalink(); ?>" class="col-6">
                        <div  class="slider-item blog-article <?php echo the_field('blog_type_of_post') ?>" style="background-image: url('<?php echo the_field('blog_main_photo') ?>');">
                            <i class="fas icon"></i>
                            <div class="background"></div>
                        </div>
                        <p class="title"><?php echo the_field('blog_title') ?></p>
                        <p class="text"><?php echo the_field('blog_text') ?></p>
                    </a>
<?php
 
		endwhile;
 
	endif;

	die();
}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
