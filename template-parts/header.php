<div class="header">
    <div class="container flex">
        <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt=""></a>
        <ul class="navbar">
            <li><a href="<?php echo home_url(); ?>/#about">About</a></li>
            <li class="parent-submenu">
                <a href="<?php echo home_url(); ?>/blog">Knowledge Base</a>
                <ul class="submenu">
                    <li><a href="#">Seasoning&Care</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Other Category</a></li>
                </ul>
            </li>
            <li><a href="<?php echo home_url(); ?>/recipes">Recipes</a></li>
            <li><a href="<?php echo home_url(); ?>/faq">FAQ</a></li>
            <li><a data-modal="modal-register" class="md-trigger">Register</a></li>
            <li><a data-modal="modal-contact" class="md-trigger">Contact</a></li>
        </ul>
        <a data-amazon="<?php the_field('button_buy_link_amazon', 20) ?>" data-ebay="<?php the_field('button_buy_link_ebay', 20) ?>" class="button md-trigger js-button-buy" data-modal="modal-where-to-buy">Buy now<span class="back"></span></a>
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