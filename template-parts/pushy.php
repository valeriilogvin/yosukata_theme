
<nav class="pushy pushy-left" data-focus="#first-link">
    <div class="pushy-content flex">
        <a class="close menu-btn"><span></span><span></span></a>

        <ul class="navbar">
            <li class="pushy-link"><a href="<?php echo home_url(); ?>/#about"><?php the_field('menu_about',20) ?></a></li>
            <li class="parent-submenu">
                <a><?php the_field('menu_knowledge_base',20) ?></a>
                <ul class="submenu blog_tabs">
                    <li class="pushy-link"><a href="<?php echo home_url(); ?>/blog"><?php the_field('menu_seasoning',20) ?></a></li>
                    <li class="pushy-link"><a href="<?php echo home_url(); ?>/blog"><?php the_field('menu_other_category',20) ?></a></li>
                    <li class="pushy-link"><a href="<?php echo home_url(); ?>/blog"><?php the_field('menu_video',20) ?></a></li>
                </ul>
            </li>
            <li class="pushy-link"><a href="<?php echo home_url(); ?>/recipes"><?php the_field('menu_recipes',20) ?></a></li>
            <li class="pushy-link"><a href="<?php echo home_url(); ?>/faq"><?php the_field('menu_faq',20) ?></a></li>
            <li class="pushy-link"><a data-modal="modal-register" class="md-trigger"><?php the_field('menu_register',20) ?></a></li>
            <li class="pushy-link"><a data-modal="modal-contact" class="md-trigger"><?php the_field('menu_contact',20) ?></a></li>
        </ul>
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

        <a href="<?php echo home_url(); ?>/global" class="global"><img  style="width: 20px; display: block;" src="<?php echo get_stylesheet_directory_uri() ?>/img/global.svg" alt=""></a>

        <a href="<?php echo home_url(); ?>/catalogue" class="button js-button-buy" >
            <?php the_field('button_buy_text',20) ?>
            <span class="back"></span>
        </a>

    </div>
</nav>
<div class="site-overlay"></div>
