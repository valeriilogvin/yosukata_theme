<?php
/**
 * The template for displaying archive pages of recipes
 */

if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>

    <div class="blog">
        <div class="container">
            <div class="flex row">
                <div class="col-6">
                    <h2>Blog</h2>
                </div>
                <div class="col-6 blog-buttons">
                    <a href="#" class="blog-button active">All</a>
                    <a href="#" class="blog-button">Articles</a>
                    <a href="#" class="blog-button">Video</a>
                </div>
            </div>
        </div>
        <div class="container container-blog">
            <div class="flex row">
                <div class="col-6">
                    <a href="#" class="slider-item slider-row blog-article video" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg')">
                        <i class="fas icon"></i>
                        <div class="background"></div>
                    </a>
                    <p class="title">About Yosukata. Brand traditions and priorities</p>
                </div>
                <div class="col-6">
                    <a href="#" class="slider-item slider-column-top blog-article articles post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col1.png.jpg')">
                        <i class="fas icon"></i>
                        <div class="background"></div>
                    </a>
                    <p class="title">Sesoning&Caring. Method #1</p>
                    <p class="text">Lorem Ipsum has been the industry's text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</p>

                </div>
                <div class="col-6">
                    <a href="#" class="slider-item slider-row blog-article video" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg')">
                        <i class="fas icon"></i>
                        <div class="background"></div>
                    </a>
                    <p class="title">About Yosukata. Brand traditions and priorities</p>
                </div>
                <div class="col-6">
                    <a href="#" class="slider-item slider-column-top blog-article articles post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col1.png.jpg')">
                        <i class="fas icon"></i>
                        <div class="background"></div>
                    </a>
                    <p class="title">Sesoning&Caring. Method #1</p>
                    <p class="text">Lorem Ipsum has been the industry's text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</p>

                </div>
                <div class="col-6">
                    <a href="#" class="slider-item slider-row blog-article video" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg')">
                        <i class="fas icon"></i>
                        <div class="background"></div>
                    </a>
                    <p class="title">About Yosukata. Brand traditions and priorities</p>
                </div>
                <div class="col-6">
                    <a href="#" class="slider-item slider-column-top blog-article articles post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col1.png.jpg')">
                        <i class="fas icon"></i>
                        <div class="background"></div>
                    </a>
                    <p class="title">Sesoning&Caring. Method #1</p>
                    <p class="text">Lorem Ipsum has been the industry's text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</p>

                </div>
                <div class="col-6">
                    <a href="#" class="slider-item slider-row blog-article video" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg')">
                        <i class="fas icon"></i>
                        <div class="background"></div>
                    </a>
                    <p class="title">About Yosukata. Brand traditions and priorities</p>
                </div>
                <div class="col-6">
                    <a href="#" class="slider-item slider-column-top blog-article articles post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col1.png.jpg')">
                        <i class="fas icon"></i>
                        <div class="background"></div>
                    </a>
                    <p class="title">Sesoning&Caring. Method #1</p>
                    <p class="text">Lorem Ipsum has been the industry's text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</p>

                </div>
                <div class="col-6">
                    <a href="#" class="slider-item slider-row blog-article video" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-row.jpg')">
                        <i class="fas icon"></i>
                        <div class="background"></div>
                    </a>
                    <p class="title">About Yosukata. Brand traditions and priorities</p>
                </div>
                <div class="col-6">
                    <a href="#" class="slider-item slider-column-top blog-article articles post" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/sect4-slider-col1.png.jpg')">
                        <i class="fas icon"></i>
                        <div class="background"></div>
                    </a>
                    <p class="title">Sesoning&Caring. Method #1</p>
                    <p class="text">Lorem Ipsum has been the industry's text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</p>

                </div>
            </div>
        </div>
    </div>

<?php
get_footer();