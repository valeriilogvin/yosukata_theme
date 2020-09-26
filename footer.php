<?php
/**
 * The template for displaying the footer
 *
 */

?>

<div class="footer">
    <div class="container">
        <div class="flex row">
            <a href="#" class="logo col-4">
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
<nav class="pushy pushy-left" data-focus="#first-link">
    <div class="pushy-content flex">
        <a class="close menu-btn"><span></span><span></span></a>

        <ul class="navbar">
            <li class="pushy-link"><a href="#about">About</a></li>
            <li class="parent-submenu">
                <a>Knowledge Base</a>
                <ul class="submenu">
                    <li><a href="#">Seasoning&Care</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Other Category</a></li>
                </ul>
            </li>
            <li class="pushy-link"><a href="#recipes">Recipes</a></li>
            <li class="pushy-link"><a href="">FAQ</a></li>
            <li class="pushy-link"><a href="#" data-modal="modal-register" class="md-trigger">Register</a></li>
            <li class="pushy-link"><a href="#" data-modal="modal-contact" class="md-trigger">Contact</a></li>
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
<!--pushy:end-->

<!--md-modal-->
<div class="md-modal md-effect-1" id="modal-register">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="flex row">
            <div class="col-4">
                <h2 class="modal-name">Register</h2>
            </div>
            <div class="col-8">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dui ipsum. Sed ac ante vitae
                    ipsum rutrum tincidunt quis ac dolor.
                    <br />
                    <br />
                    Morbi ac convallis augue. Donec condimentum dapibus tellus sed bibendum. Nam auctor nunc ac
                    lorem placerat, <a href="#">Warranty</a> ut viverra urna fermentum. Quisque a lacinia diam.
                </p>
                <form action="" class="modal-form flex row">
                    <input name="Name" type="text" class="col-6" placeholder="Name" required>
                    <input name="E-mail" type="text" class="col-6" placeholder="E-mail" required>
                    <input name="Place" type="text" class="col-6" placeholder="Place of purchase (store etc.)" required>
                    <input name="Order" type="text" class="col-6" placeholder="Order ID" required>
                    <select name="select" required class="col-12">
                        <option disabled="" selected="">Select purchased item</option>
                        <option value="type-of-work-1">one</option>
                        <option value="type-of-work-1">two</option>
                    </select>
                    <div class="error"><span></span></div>
                    <button class="button black" type="submit"><span class="back"></span>Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="md-modal md-effect-1" id="modal-contact">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="flex row">
            <div class="col-4">
                <h2 class="modal-name">Contact Us</h2>
            </div>
            <div class="col-8">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dui ipsum. Sed ac ante vitae
                    ipsum rutrum tincidunt quis ac dolor. Aenean eget nunc massa. Sed eu lacus velit. Fusce blandit
                    faucibus
                    semper.
                </p>
                <form action="" class="modal-form flex row" method="post">
                    <input name="Name2" type="text" class="col-6" placeholder="Name" required>
                    <input name="E-mail2" type="text" class="col-6" placeholder="E-mail" required>
                    <textarea class="col-12" name="massage" rows="5" placeholder="Message"></textarea>
                    <div class="error"><span></span></div>
                    <button class="button black" type="submit"><span class="back"></span>Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="md-modal md-effect-1" id="modal-wholesale">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="flex row">
            <div class="col-4">
                <h2 class="modal-name">Wholesale</h2>
            </div>
            <div class="col-8">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dui ipsum. Sed ac ante vitae
                    ipsum rutrum tincidunt quis ac dolor. Aenean eget nunc massa. Sed eu lacus velit. Fusce blandit
                    faucibus semper.
                    <br/>
                    <br/>
                    Morbi ac convallis augue. Donec condimentum dapibus tellus sed bibendum. Nam auctor nunc ac
                    lorem placerat, ut viverra urna fermentum. Quisque a lacinia diam.
                </p>
                <form action="" class="modal-form flex row">
                    <input name="Name" type="text" class="col-6" placeholder="Name" required>
                    <input name="E-mail" type="text" class="col-6" placeholder="E-mail" required>
                    <input name="contact" type="text" class="col-6" placeholder="Contact person" required>
                    <input name="phone" type="text" class="col-6" placeholder="Phone" required>
                    <div class="error"><span></span></div>
                    <button class="button black" type="submit"><span class="back"></span>Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="md-modal md-effect-1" id="modal-coupon">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="flex row">
            <div class="col-4">
                <h2 class="modal-name">Instant Deal!</h2>
            </div>
            <div class="col-8">
                <p class="title-red">Get 10% OFF</p>
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dui ipsum. Sed ac ante vitae
                    ipsum rutrum tincidunt quis ac dolor.
                </p>
                <form action="" class="modal-form flex row">
                    <input name="email" type="text" class="col-12" placeholder="Your e-mail here" required>
                    <div class="error"><span></span></div>
                    <button class="button black" type="submit"><span class="back"></span>Get my code</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="md-modal md-effect-1" id="modal-where-to-buy">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="flex row">
            <div class="col-4">
                <h2 class="modal-name">Where to buy</h2>
            </div>
            <div class="col-8">
                <p class="text">Choose where you
                    wanna shop our products</p>
                <div class="flex row">
                    <a href="" class="col-6 buy-button">
                        <span>Buy at</span>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/amazon.svg" alt="">

                    </a>
                    <a href="" class="col-6 buy-button">
                        <span>Buy at</span>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ebay.svg" alt="">

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="md-overlay"></div><!-- the overlay element -->
<!--md-modal:end-->
<?php wp_footer(); ?>
</body>

</html>