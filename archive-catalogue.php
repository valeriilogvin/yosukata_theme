<?php
/**
 * The template for displaying archive pages of catalogue
 */

if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>

<?php
$posts = get_posts( array(
    'numberposts' => -1,
    'post_type'   => 'catalogue',
    'tag' => 'steel-pans',
    'suppress_filters' => true,
));
foreach( $posts as $post ){ setup_postdata($post);
    ?>
        <p><?php the_title() ?></p>
        <?php the_content() ?>
    <?php
}
wp_reset_postdata();
?>
    <div class="container catalogue">
        <h2>Catalogue</h2>
        <div class="flex">
            <div class="col-2 js-col-2">
                <ul class="fixed-catalogue js-fixed-catalogue">
                    <li><a href="#Steel-Woks">Steel Woks</a></li>
                    <li><a href="#Steel-Pans">Steel Pans</a></li>
                    <li><a href="#Cast-Iron-Woks">Cast Iron Woks</a></li>
                    <li><a href="#Cast-Iron-Pans">Cast Iron Pans</a></li>
                    <li><a href="#Lids">Lids</a></li>
                    <li><a href="#Accessories">Accessories</a></li>
                </ul>
            </div>
            <div class="col-10">
                <div id="Steel-Woks" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3>Steel Woks</h3>
                        <span class="line"></span>
                    </div>
                    <div class="flex row">
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                    </div>
                </div>
                <div id="Steel-Pans" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3>Steel Pans</h3>
                        <span class="line"></span>
                    </div>
                    <div class="flex row">
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                    </div>
                </div>
                <div id="Cast-Iron-Woks" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3>Cast Iron Woks</h3>
                        <span class="line"></span>
                    </div>
                    <div class="flex row">
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                    </div>
                </div>
                <div id="Cast-Iron-Pans" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3>Cast Iron Pans</h3>
                        <span class="line"></span>
                    </div>

                    <div class="flex row">
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                    </div>
                </div>
                <div id="Lids" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3>Lids</h3>
                        <span class="line"></span>
                    </div>
                    <div class="flex row">
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                    </div>
                </div>
                <div id="Accessories" class="catalogue-item js-catalogue-item">
                    <div class="catalogue-item-title">
                        <h3>Accessories</h3>
                        <span class="line"></span>
                    </div>
                    <div class="flex row">
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                        <a href="#" class="item col-3">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script defer >

    </script>
<?php


get_footer();