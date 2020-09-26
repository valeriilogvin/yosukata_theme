<!DOCTYPE html>
<html lang="en">
<head>

    <!-- noindex, nofollow -->
    <meta name="robots" content="noindex, nofollow">
    <!-- /noindex, nofollow -->

    <meta charset="UTF-8">

    <title>Yosukata</title>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/img/iconified/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/img/iconified/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri() ?>/img/iconified/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ?>/img/iconified/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri() ?>/img/iconified/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ?>/img/iconified/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() ?>/img/iconified/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ?>/img/iconified/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ?>/img/iconified/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/img/iconified/apple-touch-icon-180x180.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <?php wp_head(); ?>

</head>

<div class="wrapper pages">

    <div class="header">
        <div class="container flex">
            <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt=""></a>
            <ul class="navbar">
                <li><a href="<?php echo home_url(); ?>/#about">About</a></li>
                <li class="parent-submenu">
                    <a href="">Knowledge Base</a>
                    <ul class="submenu">
                        <li><a href="#">Seasoning&Care</a></li>
                        <li><a href="#">Video</a></li>
                        <li><a href="#">Other Category</a></li>
                    </ul>
                </li>
                <li><a href="#recipes">Recipes</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="#" data-modal="modal-register" class="md-trigger">Register</a></li>
                <li><a href="#" data-modal="modal-contact" class="md-trigger">Contact</a></li>
            </ul>
            <a href="#" class="button md-trigger" data-modal="modal-where-to-buy">Buy now<span class="back"></span></a>
            <div class="language">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/usa.jpg" alt="">
                <div class="language_drop-down">
                    <a href="#" class="ger">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ger.jpg" alt="">
                    </a>
                    <a href="#" class="fr">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/fr.jpg" alt="">
                    </a>
                    <a href="#" class="ch">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ch.jpg" alt="">
                    </a>
                </div>
            </div>
            <button class="menu-btn display_none">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
    <div class="fixed-box">
        <div class="fixed-header header ">
            <div class="container flex">
                <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt=""></a>
                <ul class="navbar">
                    <li><a href="<?php echo home_url(); ?>/#about">About</a></li>
                    <li class="parent-submenu">
                        <a href="">Knowledge Base</a>
                        <ul class="submenu">
                            <li><a href="#">Seasoning&Care</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">Other Category</a></li>
                        </ul>
                    </li>
                    <li><a href="#recipes">Recipes</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a data-modal="modal-register" class="md-trigger">Register</a></li>
                    <li><a data-modal="modal-contact" class="md-trigger">Contact</a></li>
                </ul>

                <a href="#" class="button md-trigger" data-modal="modal-where-to-buy">Buy now<span class="back"></span></a>
                <div class="language">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/usa.jpg" alt="">
                    <div class="language_drop-down">
                        <a href="#" class="ger">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ger.jpg" alt="">
                        </a>
                        <a href="#" class="fr">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/fr.jpg" alt="">
                        </a>
                        <a href="#" class="ch">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ch.jpg" alt="">
                        </a>
                    </div>
                </div>
                <button class="menu-btn display_none">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>
        </div>
    </div>

    <div class="sect-breadcrumbs">
        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>
    </div>

