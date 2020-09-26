<?php
/**
 * The template for displaying single posts of recipes
 */

if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>

    <div class="recipes-article">
        <div class="sect-main">
            <div class="container ">
                <div class="flex row">
                    <div class="col-5">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/recipes-main.jpg" alt="">
                    </div>
                    <div class="col-7">
                        <h1>Noodles and shrimps stir-fry</h1>
                        <div class="flex info" >
                            <span class="difficulty">Difficulty <span class="text">easy</span></span>
                            <span class="serving">Serving <span class="text">4</span></span>
                            <span class="time"><span class="text">32 min</span></span>
                        </div>
                        <div class="ingredients">
                            <p class="title">Ingredients</p>
                            <ul>
                                <li>8 oz. (220 g) linguine</li>
                                <li>2 tablespoons olive oil</li>
                                <li>8 tablespoons (1 stick) unsalted butter</li>
                                <li>4 cloves garlic, minced</li>
                                <li>1 teaspoon red pepper flakes</li>
                                <li>1 ¼ lb. (565 g) shrimp</li>
                                <li>salt and pepper to taste</li>
                                <li>1 teaspoon dried oregano</li>
                                <li>4 cups (160 g) baby spinach</li>
                                <li>¼ cup (25 g) parmesan cheese, grated</li>
                                <li>2 tablespoons fresh parsley, chopped</li>
                                <li>1 tablespoons lemon juice</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-8 instructions">
                    <p class="title">Instructions</p>
                    <ul>
                        <li><span class="num">1.</span> Cook pasta in boiling water until al dente.</li>
                        <li><span class="num">2.</span> Drain and set pasta aside.</li>
                        <li><span class="num">3.</span> Heat up wok, pour in olive oil and 2 tablespoons of butter. Add garlic and crushed red pepper, cook until fragrant.</li>
                        <li><span class="num">4.</span> Throw in shrimp, salt and pepper to taste, and stir until shrimp half cooked.</li>
                        <li><span class="num">5.</span> Add in oregano and spinach.</li>
                        <li><span class="num">6.</span> Return cooked pasta to the wok, add remaining butter, parmesan, and parsley. Stir until well mixed and the butter is melted.</li>
                        <li><span class="num">7.</span> When the shrimp are cooked, add lemon juice</li>
                    </ul>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/limes.png" alt="" class="limes">

        </div>
        <div class="sect2 center" style="background: #f7f7f7;">
            <div class="container flex">
                <div class="col-8">
                    <p class="title">Video</p>
                    <a href="" class="video-block" style="background: url('<?php echo get_stylesheet_directory_uri() ?>/img/article-img-2.jpg'); background-size: cover">
                        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
                    </a>
                </div>

                <div class="col-8">
                    <p class="title" style="padding-top: 70px;">Process photos</p>
                </div>
                <div class="blog-article-slider col-8">
                    <div class="slider img-block img-block-hover"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/article-slider-1.jpg" alt=""></div>
                    <div class="slider img-block img-block-hover"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/article-slider-2.jpg" alt=""></div>
                    <div class="slider img-block img-block-hover"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/article-slider-3.jpg" alt=""></div>
                    <div class="slider img-block img-block-hover"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/article-slider-1.jpg" alt=""></div>
                    <div class="slider img-block img-block-hover"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/article-slider-2.jpg" alt=""></div>
                    <div class="slider img-block img-block-hover"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/article-slider-3.jpg" alt=""></div>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/avocado.png" alt="" class="avocado">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/big_pepper.png" alt="" class="big_pepper">
        </div>
        <div class="more-recipes">
            <div class="container">
                <div class="flex row">
                    <div class="col-9">
                        <h2 data-aos="fade-right"
                            data-aos-delay="300"
                            data-aos-duration="1000">
                            Check out our recipes!
                        </h2>
                    </div>
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
            </div>
        </div>
    </div>

<?php
get_footer();
