<?php
/**
 * The template for displaying the footer
 *
 */

?>

<div class="footer">
    <div class="container">
        <div class="flex row">
            <a href="<?php echo home_url(); ?>" class="logo col-4">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt="">
            </a>
            <div class="col-4">
                <div class="flex row">
                    <div class="col-6">
                        <ul>
                            <li><a href="<?php echo home_url(); ?>/#about"><?php the_field('menu_about',20) ?></a></li>
                            <li><a href="<?php echo home_url(); ?>/blog"><?php the_field('menu_knowledge_base',20) ?></a></li>
                            <li><a href="<?php echo home_url(); ?>/recipes"><?php the_field('menu_recipes',20) ?></a></li>
                            <li><a href="<?php echo home_url(); ?>/faq"><?php the_field('menu_faq',20) ?></a></li>
                            <li><a data-modal="modal-contact" class="md-trigger"><?php the_field('menu_contact',20) ?></a></li>
                            <li><a href="<?php echo home_url(); ?>/catalogue"><?php the_field('menu_shop',20) ?></a></li>
                            <li><a href="<?php echo home_url(); ?>/global"><?php the_field('menu_global',20) ?></a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li><a data-modal="modal-register" class="md-trigger"><?php the_field('menu_product_registration',20) ?></a></li>
                            <li><a data-modal="modal-wholesale" class="md-trigger"><?php the_field('menu_wholesales',20) ?></a></li>
                            <li><a href="<?php echo home_url(); ?>/warranty-returns"><?php the_field('menu_warranty',20) ?></a></li>
                            <li><a href="<?php echo home_url(); ?>/privacy-policy"><?php the_field('menu_privacy_policy',20) ?></a></li>
                            <li><a href="<?php echo home_url(); ?>/terms-conditions"><?php the_field('menu_terms',20) ?></a></li>
                            <li><a href="<?php echo home_url(); ?>/cookies-policy"><?php the_field('cookies-policy',20) ?></a></li>
                            <li><a href="<?php echo home_url(); ?>/site-map/"><?php the_field('menu_site_map',20) ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p class="text"><?php the_field('subscribe',20) ?></p>
                <?php echo do_shortcode( ' [contact-form-7 id="505" title="Subscribe" html_class="form-footer"]' ); ?>
                <!--<form action="" class="form-footer">
                     
                   
                    <input type="text" placeholder="<?php the_field('footer_placeholder', 20) ?>">
                    <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                </form>-->
                <div class="social">
<!--                    <a href="--><?php //the_field('facebook_link',20) ?><!--"><i class="fab fa-facebook-f"></i></a>-->
<!--                    <a href="--><?php //the_field('instagram_link',20) ?><!--"><i class="fab fa-instagram"></i> </a>-->
<!--                    <a href="--><?php //the_field('pinterest_link',20) ?><!--"><i class="fab fa-pinterest-p"></i></a>-->
                    <a href="<?php the_field('youtube_link',20) ?>"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span style="text-align: center;">© Yosukata <?=date("Y");?>, <br />Suzhou Allshine I/E Limited. Rm.12, Ho King Commercial Centre, 2-16 Fa Yuen str., Mongkok, Kowloon, Hong Kong. <br /> <a href="mailto:info@yosukata.com" >info@yosukata.com</a></span>
            <!--<div class="img">
                <img src="<?php /*echo get_stylesheet_directory_uri() */?>/img/footer-icons.png" alt="" class="icons">  <br>
            </div>-->
        </div>
    </div>
</div>

<a class="back_to_top" title="<?php the_field('back_to_top',20) ?>">
    <div class="arrow">
        <span></span>
        <span></span>
    </div>
</a>


<!-- button "get coupon"-->

<!--<a class="coupon md-trigger" data-modal="modal-coupon">-->
<!--    <span>--><?php //the_field('coupon_text',20) ?><!--</span>-->
<!--</a>-->

</div>

<!--pushy-->
<?php get_template_part( 'template-parts/pushy' ); ?>
<!--pushy:end-->

<!--md-modal-->
<?php get_template_part( 'template-parts/modal', 'register' ); ?>
<?php get_template_part( 'template-parts/modal', 'contact' ); ?>
<?php get_template_part( 'template-parts/modal', 'wholesale' ); ?>
<?php get_template_part( 'template-parts/modal', 'coupon' ); ?>
<?php get_template_part( 'template-parts/modal', 'where-to-buy' ); ?>
<?php get_template_part( 'template-parts/modal', 'question' ); ?>
<div class="md-overlay"></div><!-- the overlay element -->
<!--md-modal:end-->

<?php wp_footer(); ?>

</body>

</html>