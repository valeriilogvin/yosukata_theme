<?php
    get_header('home');
?>

<body>

<div class="wrapper">

    <section class="sect1">
        <div href="#" class="header-top display_none">
            <div class="container">
                <p>free shipping on orders over 75$</p>
                <a href="#" class="close">
                    <span></span><span></span>
                </a>
            </div>
        </div>

        <div class="header">
            <div class="container flex">
                <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt=""></a>
                <ul class="navbar">
                    <li><a href="#about">About</a></li>
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
        <div class="container container-arrow">
            <div class="arrow">
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="sect1-slick">
            <div class="slider1 slider1_1">
                <div class="container">
                    <div class="content">
                        <h1 data-aos="fade-right"
                            data-aos-delay="300"
                            data-aos-duration="1000">Traditional WOK</h1>
                        <h2>Stir-fry like a Chef at your home!</h2>
                        <a href="#" class="button">Find out more<span class="back"></span></a>
                    </div>
                </div>
                <div class="container container-bottom">
                    <div class="slider-lines">
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
            <div class="slider1 slider1_2">
                <div class="container">
                    <div class="content">
                        <h1 data-aos="fade-right"
                            data-aos-delay="300"
                            data-aos-duration="1000">Traditional WOK</h1>
                        <h2>Stir-fry like a Chef at your home!</h2>
                        <a href="#" class="button">Find out more<span class="back"></span></a>
                    </div>
                </div>
                <div class="container container-bottom">
                    <div class="slider-lines">
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
            <div class="slider1 slider1_3">
                <div class="container">
                    <div class="content">
                        <h1 data-aos="fade-right"
                            data-aos-delay="300"
                            data-aos-duration="1000">Traditional WOK</h1>
                        <h2>Stir-fry like a Chef at your home!</h2>
                        <a href="#" class="button">Find out more<span class="back"></span></a>
                    </div>
                </div>
                <div class="container container-bottom">
                    <div class="slider-lines">
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sect2">
        <div class="fixed-box">
            <div class="fixed-header header "  style="top: 0;">
                <div class="container flex">
                    <a href="" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt=""></a>
                    <ul class="navbar">
                        <li><a href="#about">About</a></li>
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
        <div class="container">
            <h2 data-aos="fade-right"
                data-aos-delay="300"
                data-aos-duration="1000">
                Special offers
            </h2>
            <div class="flex row">
                <a href="#" class="item deal_of_the_month col-6">
                    <h2 class="title">Deal of <br />the month</h2>
                    <div class="flex">
                        <div class="img-block">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/sect2-1.png" alt="">
                        </div>
                        <div class="descriptions">
                            <h3>Pre-Seasoned Carbon Steel Wok Pan 14“ </h3>
                            <div class="stars stars5">
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                            </div>
                            <div class="flex">
                                <div class="price-block">
                                    <span class="price">49.99$</span>
                                    <span class="old-price">59.99$</span>
                                </div>
                                <p  class="button black">Buy now<span class="back"></span></p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="item top_sales col-3">
                    <div class="fire">
                        <i class="fas fa-fire"></i> top sales
                    </div>
                    <div class="img-block"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/sect2-1.png" alt=""></div>
                    <div class="descriptions">
                        <h3>Pre-Seasoned Carbon Steel Wok Pan 14“ </h3>
                        <div class="stars stars4">
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                        </div>
                        <div class="flex">
                            <span class="price">59.99$</span>
                            <p class="button black"><span class="back"></span> Buy now</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="item top_sales col-3">
                    <div class="fire">
                        <i class="fas fa-fire"></i> top sales
                    </div>
                    <div class="img-block"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/sect2-1.png" alt=""></div>
                    <div class="descriptions">
                        <h3>Pre-Seasoned Carbon Steel Wok Pan - 14“ Woks and Stir Fry Pans</h3>
                        <div class="stars stars4">
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                        </div>
                        <div class="flex">
                            <span class="price">59.99$</span>
                            <p class="button black"><span class="back"></span> Buy now</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="text-center">
                <a href="#" class="button black"><span class="back"></span> View full catalogue</a>
            </div>
        </div>
        <img class="pepper" src="<?php echo get_stylesheet_directory_uri() ?>/img/pepper.png" alt="">
        <img class="limes" src="<?php echo get_stylesheet_directory_uri() ?>/img/limes.png" alt="">
        <img class="parsley" src="<?php echo get_stylesheet_directory_uri() ?>/img/parsley.png" alt="">
    </section>

    <section class="sect3">
        <div class="container">
            <h2 data-aos="fade-right"
                data-aos-delay="300"
                data-aos-duration="1000">
                Categories
            </h2>
            <div class="flex row">
                <a href="#" class="item col-4">
                    <h3>Steel Woks</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/steel-woks.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
                <a href="#" class="item col-4">
                    <h3>Steel Pans</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/steel-pans.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
                <a href="#" class="item col-4">
                    <h3>Cast Iron Woks</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/iron-woks.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
                <a href="#" class="item col-4">
                    <h3>Cast Iron Pans</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/iron-pans.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
                <a href="#" class="item col-4">
                    <h3>Lids</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/lids.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
                <a href="#" class="item col-4">
                    <h3>Accessories</h3>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/accessories.png" alt="">
                    <p class="button"><span class="back"></span> To the Category</p>
                </a>
            </div>
        </div>
        <img class="bayleaf" src="<?php echo get_stylesheet_directory_uri() ?>/img/bayleaf.png" alt="">
        <img class="bazil" src="<?php echo get_stylesheet_directory_uri() ?>/img/bazil.png" alt="">
    </section>

    <section class="sect4">
        <div class="container">
            <div class="flex row">
                <div class="col-9">
                    <h2 data-aos="fade-right"
                        data-aos-delay="300"
                        data-aos-duration="1000">
                        Find out more about Yosukata
                    </h2>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
                </div>
                <div class="col-3 button-block">
                    <a href="#" class="button black"><span class="back"></span>See all</a>
                </div>
            </div>
            <div class="sect4-slick">
                <div class="slider">
                    <a href="#" class="slider-item slider-row video" style="background: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg')">
                        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                        <p class="title">About Yosukata. Brand traditions and priorities</p>
                        <i class="fas fa-video"></i>
                    </a>
                    <div class="slider-column">
                        <a href="#" class="slider-item slider-column-top post" >
                            <p class="title">Sesoning&Caring. Method #1
                                <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... </span>
                            </p>
                            <i class="fas fa-align-left"></i>
                        </a>
                        <a href="#" class="slider-item slider-column-bottom post">
                            <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                            <p class="title">Cook like a Chef! Wok cooking tips&tricks</p>
                            <i class="fas fa-video"></i>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <a href="#" class="slider-item slider-row video" style="background: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg')">
                        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                        <p class="title">About Yosukata. Brand traditions and priorities</p>
                        <i class="fas fa-video"></i>
                    </a>
                    <div class="slider-column">
                        <a href="#" class="slider-item slider-column-top post" >
                            <p class="title">Sesoning&Caring. Method #1
                                <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... </span>
                            </p>
                            <i class="fas fa-align-left"></i>
                        </a>
                        <a href="#" class="slider-item slider-column-bottom post">
                            <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                            <p class="title">Cook like a Chef! Wok cooking tips&tricks</p>
                            <i class="fas fa-video"></i>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <a href="#" class="slider-item slider-row video" style="background: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg')">
                        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                        <p class="title">About Yosukata. Brand traditions and priorities</p>
                        <i class="fas fa-video"></i>
                    </a>
                    <div class="slider-column">
                        <a href="#" class="slider-item slider-column-top post" >
                            <p class="title">Sesoning&Caring. Method #1
                                <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... </span>
                            </p>
                            <i class="fas fa-stream"></i>
                        </a>
                        <a href="#" class="slider-item slider-column-bottom post">
                            <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                            <p class="title">Cook like a Chef! Wok cooking tips&tricks</p>
                            <i class="fas fa-video"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="sect4-slick-mobile">
                <div class="slider">
                    <a href="#" class="slider-item video" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg');">
                        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                        <p class="title">About Yosukata. Brand traditions and priorities</p>
                        <i class="fas fa-video"></i>
                    </a>
                </div>
                <div class="slider">
                    <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col1.png.jpg');">
                        <p class="title">Sesoning&Caring. Method #1
                            <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... </span>
                        </p>
                        <i class="fas fa-align-left"></i>
                    </a>
                </div>
                <div class="slider">
                    <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col2.png.jpg');">
                        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                        <p class="title">Cook like a Chef! Wok cooking tips&tricks</p>
                        <i class="fas fa-video"></i>
                    </a>
                </div>
                <div class="slider">
                    <a href="#" class="slider-item video"
                       style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg')">
                        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                        <p class="title">About Yosukata. Brand traditions and priorities</p>
                        <i class="fas fa-video"></i>
                    </a>
                </div>
                <div class="slider">
                    <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col1.png.jpg');">
                        <p class="title">Sesoning&Caring. Method #1
                            <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... </span>
                        </p>
                        <i class="fas fa-align-left"></i>
                    </a>
                </div>
                <div class="slider">
                    <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col2.png.jpg');">
                        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                        <p class="title">Cook like a Chef! Wok cooking tips&tricks</p>
                        <i class="fas fa-video"></i>
                    </a>
                </div>
                <div class="slider">
                    <a href="#" class="slider-item video"
                       style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg');">
                        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                        <p class="title">About Yosukata. Brand traditions and priorities</p>
                        <i class="fas fa-video"></i>
                    </a>
                </div>
                <div class="slider">
                    <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col1.png.jpg');">
                        <p class="title">Sesoning&Caring. Method #1
                            <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's... </span>
                        </p>
                        <i class="fas fa-stream"></i>
                    </a>
                </div>
                <div class="slider">
                    <a href="#" class="slider-item post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col2.png.jpg');">
                        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                        <p class="title">Cook like a Chef! Wok cooking tips&tricks</p>
                        <i class="fas fa-video"></i>
                    </a>
                </div>
            </div>
            <!--.flex-->
        </div>
    </section>

    <section class="sect5" id="about">
        <div class="container">
            <div class="flex row">
                <div class="col-6">
                    <h2 data-aos="fade-right"
                        data-aos-delay="300"
                        data-aos-duration="1000">
                        About
                    </h2>
                    <p>When it comes to dish excellence, there is never a detail that we overlook. Although more and more
                        of us care about organic, healthy ingredients that are rich in taste and flavors, but forget to pay
                        attention to kitchen cooking utensils. <span class="bold">Nature has provided us with solution that has been forgotten
                                        in the pursuit of convenience: fire and iron.</span> Peek inside the kitchen of any restaurant and you will
                        find cast iron and carbon steel cooking ware in the place of non-stick coated pans. It is a key for
                        cooking tasteful dishes.
                        <br /><br />
                        We are chefs who care about flavor and can distinguish between a pan that is high-quality and one
                        that is cheap tin. We are constantly sourcing and testing in order to distill the pans that make it
                        possible to create culinary masterpieces. We founded the Yosukata company to help consumers
                        revitalize the benefits of natural cooking ware.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="sect6">
        <div class="container">
            <h2 data-aos="fade-right"
                data-aos-delay="300"
                data-aos-duration="1000">
                Reviews
            </h2>
            <div class="sect6-slick">
                <div class="slide">
                    <p class="title">Authentic Wok, great price, “asian guy” approved</p>
                    <div class="stars stars5">
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                    </div>
                    <div class="line">
                        <span class="country"><i class="fas fa-flag"></i>United States</span>
                        <a href=""><i class="fab fa-amazon"></i>Link to the review & photos on Amazon</a>
                    </div>
                    <p class="text">Great price, pre seasoned which is practical , FOLLOW RECOMMENDED CLEANING, NO
                        DISH SOAP , and this will be a heirloom kitchen utensil. Just the right feel and weight for
                        an authentic wok ,I do recommended buying the metal circular wok stand for use on gas stove
                        for greater stability otherwise as long as you’re comfortable just keep it stable by holding
                        the handle while stir frying .
                        The quality of metal used plus the pre seasoning of the wok gives an authentic ‘Chinese take
                        out’ taste on everything you cook in it</p>
                </div>
                <div class="slide">
                    <p class="title">A perfect wok</p>
                    <div class="stars stars5">
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                    </div>
                    <div class="line">
                        <span class="country"><i class="fas fa-flag"></i>United States</span>
                        <a href=""><i class="fab fa-amazon"></i>Link to the review & photos on Amazon</a>
                    </div>
                    <p class="text"> This is not a regular wok that you find in the stores. It is a well made
                        original japnese wok. You will notice the difference as soon as you unpack it. Tried some
                        stirfry toufu with veggies and some indo-chinese fried rice, the heat distrubution is
                        perfect. The dishes came out perfect. 10 on 10 for the wok. The handle as screws if you need
                        to remove it to put in oven. The ciscumference of the handle is just perfect, lot of woks
                        have a thinner handle. Overall i am very satisfied and would recommend it to home cook
                        looking for a perfect wok</p>
                </div>
                <div class="slide">
                    <p class="title">Great product! But...</p>
                    <div class="stars stars4">
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                    </div>
                    <div class="line">
                        <span class="country"><i class="fas fa-flag"></i>United States</span>
                        <a href=""><i class="fab fa-amazon"></i>Link to the review & photos on Amazon</a>
                    </div>
                    <p class="text"> This is not a regular wok that you find in the stores. It is a well made
                        original japnese wok. You will notice the difference as soon as you unpack it. Tried some
                        stirfry toufu with veggies and some indo-chinese fried rice, the heat distrubution is
                        perfect. The dishes came out perfect. 10 on 10 for the wok. The handle as screws if you need
                        to remove it to put in oven. The ciscumference of the handle is just perfect, lot of woks
                        have a thinner handle. Overall i am very satisfied and would recommend it to home cook
                        looking for a perfect wok</p>
                </div>
                <div class="slide">
                    <p class="title">Authentic Wok, great price, “asian guy” approved</p>
                    <div class="stars stars5">
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                    </div>
                    <div class="line">
                        <span class="country"><i class="fas fa-flag"></i>United States</span>
                        <a href=""><i class="fab fa-amazon"></i>Link to the review & photos on Amazon</a>
                    </div>
                    <p class="text">Great price, pre seasoned which is practical , FOLLOW RECOMMENDED CLEANING, NO
                        DISH SOAP , and this will be a heirloom kitchen utensil. Just the right feel and weight for
                        an authentic wok ,I do recommended buying the metal circular wok stand for use on gas stove
                        for greater stability otherwise as long as you’re comfortable just keep it stable by holding
                        the handle while stir frying .
                        The quality of metal used plus the pre seasoning of the wok gives an authentic ‘Chinese take
                        out’ taste on everything you cook in it</p>
                </div>
                <div class="slide">
                    <p class="title">A perfect wok</p>
                    <div class="stars stars5">
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                    </div>
                    <div class="line">
                        <span class="country"><i class="fas fa-flag"></i>United States</span>
                        <a href=""><i class="fab fa-amazon"></i>Link to the review & photos on Amazon</a>
                    </div>
                    <p class="text"> This is not a regular wok that you find in the stores. It is a well made
                        original japnese wok. You will notice the difference as soon as you unpack it. Tried some
                        stirfry toufu with veggies and some indo-chinese fried rice, the heat distrubution is
                        perfect. The dishes came out perfect. 10 on 10 for the wok. The handle as screws if you need
                        to remove it to put in oven. The ciscumference of the handle is just perfect, lot of woks
                        have a thinner handle. Overall i am very satisfied and would recommend it to home cook
                        looking for a perfect wok</p>
                </div>
                <div class="slide">
                    <p class="title">Great product! But...</p>
                    <div class="stars stars4">
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                    </div>
                    <div class="line">
                        <span class="country"><i class="fas fa-flag"></i>United States</span>
                        <a href=""><i class="fab fa-amazon"></i>Link to the review & photos on Amazon</a>
                    </div>
                    <p class="text"> This is not a regular wok that you find in the stores. It is a well made
                        original japnese wok. You will notice the difference as soon as you unpack it. Tried some
                        stirfry toufu with veggies and some indo-chinese fried rice, the heat distrubution is
                        perfect. The dishes came out perfect. 10 on 10 for the wok. The handle as screws if you need
                        to remove it to put in oven. The ciscumference of the handle is just perfect, lot of woks
                        have a thinner handle. Overall i am very satisfied and would recommend it to home cook
                        looking for a perfect wok</p>
                </div>
            </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/parsley2.png" alt="" class="parsley">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/tomato.png" alt="" class="tomato">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/shrimp.png" alt="" class="shrimp">
    </section>

    <section class="sect7">
        <div class="container text-center">
            <p class="title">
                Want to save money while you shop?
            </p>
            <p class="text">
                Get your discount instantly, <br />
                just press the button!
            </p>
            <a href="#" class="button md-trigger" data-modal="modal-coupon"><span class="back"></span>Get a coupon</a>
        </div>
    </section>

    <section class="sect8" id="recipes">
        <div class="container">
            <div class="flex row">
                <div class="col-9">
                    <h2 data-aos="fade-right"
                        data-aos-delay="300"
                        data-aos-duration="1000">
                        Check out our recipes!
                    </h2>
                </div>
                <div class="col-3"><a href="#" class="button black"><span class="back"></span>All Recipes</a></div>
            </div>
            <div class="sect8-slick">
                <a href="#" class="slide">
                    <span class="time">32 min</span>
                    <div class="img-block" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect8-img3.jpg')"></div>
                    <div class="slide-title">
                        <span>Difficulty: <span class="value">easy</span></span>
                        <span>Servings: <span class="value">4</span></span>
                        <h3>Steel Woks</h3>
                        <p class="button"><span class="back"></span> View Recipe</p>
                    </div>
                </a>
                <a href="#" class="slide">
                    <span class="time">32 min</span>
                    <div class="img-block" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect8-img3.jpg')"></div>
                    <div class="slide-title">
                        <span>Difficulty: <span class="value">easy</span></span>
                        <span>Servings: <span class="value">4</span></span>
                        <h3>Steel Pans</h3>
                        <p class="button"><span class="back"></span>View Recipe</p>
                    </div>
                </a>
                <a href="#" class="slide">
                    <span class="time">32 min</span>
                    <div class="img-block" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect8-img3.jpg')"></div>
                    <div class="slide-title">
                        <span>Difficulty: <span class="value">easy</span></span>
                        <span>Servings: <span class="value">4</span></span>
                        <h3>Noodles and shrimps stir-fry</h3>
                        <p class="button"><span class="back"></span>View Recipe</p>
                    </div>
                </a>
                <a href="#" class="slide">
                    <span class="time">32 min</span>
                    <div class="img-block" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect8-img3.jpg')"></div>
                    <div class="slide-title">
                        <span>Difficulty: <span class="value">easy</span></span>
                        <span>Servings: <span class="value">4</span></span>
                        <h3>Cast Iron Pans</h3>
                        <p class="button"><span class="back"></span>View Recipe</p>
                    </div>
                </a>
                <a href="#" class="slide">
                    <span class="time">32 min</span>
                    <div class="img-block" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect8-img3.jpg')"></div>
                    <div class="slide-title">
                        <span>Difficulty: <span class="value">easy</span></span>
                        <span>Servings: <span class="value">4</span></span>
                        <h3>Steel Pans</h3>
                        <p class="button"><span class="back"></span>View Recipe</p>
                    </div>
                </a>
                <a href="#" class="slide">
                    <span class="time">32 min</span>
                    <div class="img-block" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect8-img3.jpg')"></div>
                    <div class="slide-title">
                        <span>Difficulty: <span class="value">easy</span></span>
                        <span>Servings: <span class="value">4</span></span>
                        <h3>Noodles and shrimps stir-fry</h3>
                        <p class="button"><span class="back"></span>View Recipe</p>
                    </div>
                </a>
                <a href="#" class="slide">
                    <span class="time">32 min</span>
                    <div class="img-block" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect8-img3.jpg')"></div>
                    <div class="slide-title">
                        <span>Difficulty: <span class="value">easy</span></span>
                        <span>Servings: <span class="value">4</span></span>
                        <h3>Cast Iron Pans</h3>
                        <p class="button"><span class="back"></span>View Recipe</p>
                    </div>
                </a>
            </div>
            <div class="bottom-text">
                <p class="js-show-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book. It has survived not only
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book. It has survived not only
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <a class="show js-show">Show full text</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>