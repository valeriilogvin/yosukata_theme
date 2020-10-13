
<nav class="pushy pushy-left" data-focus="#first-link">
    <div class="pushy-content flex">
        <a class="close menu-btn"><span></span><span></span></a>

        <ul class="navbar">
            <li><a href="<?php echo home_url(); ?>/#about">About</a></li>
            <li class="parent-submenu">
                <a>Knowledge Base</a>
                <ul class="submenu">
                    <li><a href="#">Seasoning&Care</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Other Category</a></li>
                </ul>
            </li>
            <li class="pushy-link"><a href="<?php echo home_url(); ?>/recipes">Recipes</a></li>
            <li class="pushy-link"><a href="<?php echo home_url(); ?>/faq">FAQ</a></li>
            <li class="pushy-link"><a data-modal="modal-register" class="md-trigger">Register</a></li>
            <li class="pushy-link"><a data-modal="modal-contact" class="md-trigger">Contact</a></li>
        </ul>
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

    </div>
</nav>
<div class="site-overlay"></div>
