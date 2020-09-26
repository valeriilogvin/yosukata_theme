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
        '1.3'
    );
    wp_enqueue_style(
        'yosukata-libsCSS',
        get_stylesheet_directory_uri() . '/css/libs.min.css',
        array(),
        '1.3'
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
        '1.3'
    );
    wp_enqueue_script(
        'yosukata-slick',
        get_template_directory_uri() . '/slick/slick.min.js',
        array(),
        '1.3',
        true
    );

    wp_enqueue_script(
        'yosukata-libs',
        get_template_directory_uri() . '/js/libs.min.js',
        array(),
        '1.3',
        true
    );
    wp_enqueue_script(
        'yosukata-mainJs',
        get_template_directory_uri() . '/js/main.js',
        array(),
        '1.3',
        true
    );

}
add_action( 'wp_enqueue_scripts', 'yosukata_scripts' );