<div class="header">
    <div class="container flex">
        <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt=""></a>
        <ul class="navbar">
            <li><a href="<?php echo home_url(); ?>/#about"><?php the_field('menu_about',20) ?></a></li>
            <li class="parent-submenu">
                <a href="<?php echo home_url(); ?>/blog"><?php the_field('menu_knowledge_base',20) ?></a>
                <ul class="submenu">
                    <li><a href="<?php echo home_url(); ?>/blog"><?php the_field('menu_seasoning',20) ?></a></li>
                    <li><a href="<?php echo home_url(); ?>/blog"><?php the_field('menu_video',20) ?></a></li>
                    <li><a href="<?php echo home_url(); ?>/blog"><?php the_field('menu_other_category',20) ?></a></li>
                </ul>
            </li>
            <li><a href="<?php echo home_url(); ?>/recipes"><?php the_field('menu_recipes',20) ?></a></li>
            <li><a href="<?php echo home_url(); ?>/faq"><?php the_field('menu_faq',20) ?></a></li>
            <li><a data-modal="modal-register" class="md-trigger"><?php the_field('menu_register',20) ?></a></li>
            <li><a data-modal="modal-contact" class="md-trigger"><?php the_field('menu_contact',20) ?></a></li>
        </ul>
        <a
            data-amazon="<?php the_field('button_buy_link_amazon', 20) ?>"
            data-ebay="<?php the_field('button_buy_link_ebay', 20) ?>"
            class="button md-trigger js-button-buy"
            data-modal="modal-where-to-buy">
            <?php the_field('button_buy_text',20) ?>
            <span class="back"></span>
        </a>
        <!--<div class="language">
            <img src="<?php /*echo get_stylesheet_directory_uri() */?>/img/usa.jpg" alt="">
            <div class="language_drop-down">
                <a href="#" class="ger">
                    <img src="<?php /*echo get_stylesheet_directory_uri() */?>/img/ger.jpg" alt="">
                </a>
                <a href="#" class="fr">
                    <img src="<?php /*echo get_stylesheet_directory_uri() */?>/img/fr.jpg" alt="">
                </a>
                <a href="#" class="ch">
                    <img src="<?php /*echo get_stylesheet_directory_uri() */?>/img/ch.jpg" alt="">
                </a>
            </div>
        </div>-->
        <?php
        wp_nav_menu(array(
            'theme_location'  => 'top',
            'container'       => null,
            'menu_class'      => 'topmenu',
        ));
        ?>
        <button class="menu-btn display_none">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</div>