<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package yosukata
 */

if ( is_home() ){
    get_header('home');
}
else {
    get_header('pages');
}
?>

	<div class="page-404">
        <div class="container">
            <h2>404 Page not found</h2>
            <a href="<?php echo home_url(); ?>" class="button black"><span class="back"></span>Back to the Main Page</a>
        </div>
    </div>
    <style>
        .page-404{
            height: 75vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: url("<?php echo get_stylesheet_directory_uri() ?>/img/404.png") center right no-repeat;
            background-size: 70%;
            margin-bottom: 100px;
        }

        .page-404 h2{
            color: #000000;
            font-size: 36px;
            padding-bottom: 70px;
            position: relative;
        }
        .page-404 h2:after {
            position: absolute;
            content: url(<?php echo get_stylesheet_directory_uri() ?>/img/headline_pages_curve.png);
            bottom: 50px;
            left: -5px;
        }
        @media (max-width: 1280px) {
            .page-404{
                background-size: 60%;
            }
        }
        @media (max-width: 1024px) {
            .page-404{
                background-size: 50%;
                justify-content: center;
                background-position: top center;
                padding-top: 200px;
            }
            .page-404 .container{
                width: max-content;
                text-align: center;
            }
        }
        @media (max-width: 767px) {
            .page-404{
                background-size: 70%;
                padding-top: 200px;
            }
            .page-404 .container{
                width: max-content;
                text-align: center;
            }
        }
        @media (max-width: 480px) {
            .page-404 {
                padding-top: 150px;
                background-size: 100%;
                margin-bottom: 0;
            }
            .page-404 h2 {
                font-size: 28px;
                padding-bottom: 40px;
            }
        }
    </style>

<?php
get_footer();