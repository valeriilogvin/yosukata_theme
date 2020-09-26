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
                            <li><a href="#about">About</a></li>
                            <li><a href="#">Knowledge Base</a></li>
                            <li><a href="#recipes">Recipes</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#"  data-modal="modal-contact" class="md-trigger">Contact</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li><a href="#">Product Registration</a></li>
                            <li><a href="#" data-modal="modal-wholesale" class="md-trigger">Wholesales</a></li>
                            <li><a href="#">Warranty & Returns</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p class="text">Subscribe to our newsletters to get more awesome recipes, special offers, free
                    giveaways, and once-in-a-lifetime deals.</p>
                <form action="" class="form-footer">
                    <input type="text" placeholder="Your e-mail address">
                    <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                </form>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-instagram"></i> </a>
                    <a href=""><i class="fab fa-pinterest-p"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span>© Yosukata 2020</span>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/footer-icons.png" alt="" class="icons">
        </div>
    </div>
</div>

<a class="back_to_top" title="Back to top">
    <div class="arrow">
        <span></span>
        <span></span>
    </div>
</a>

<a href="#" class="coupon md-trigger" data-modal="modal-coupon">
    <span>I’m a coupon!</span>
</a>

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
<div class="md-overlay"></div><!-- the overlay element -->
<!--md-modal:end-->

<?php wp_footer(); ?>

</body>

</html>