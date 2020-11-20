<?php
/**
 * Template Name: Warranty & Returns
 */

if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>
    <style>
        .privacy h2{
            color: #000000;
            font-size: 40px;
            padding-bottom: 70px;
            position: relative;
            margin-right: auto;
        }
        .privacy h2:after{
            position: absolute;
            content: url(<?php echo get_stylesheet_directory_uri() ?>/img/headline_pages_curve.png);
            bottom: 50px;
            left: -5px;
        }
    </style>
    <div class="blog-article privacy">
        <div class="sect1 center">
            <div class="container flex">
                <h2>Warranty & Returns</h2>

                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();

                    if( have_rows('recipe-article') ):

                        while ( have_rows('recipe-article') ) : the_row();

                            $row_layout_slug = get_row_layout();

                            echo
                            get_template_part('templates/blog-article/block', $row_layout_slug);

                        endwhile;

                    endif;
                endwhile; else : ?>
                    <div class="section section-not-found">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>

    </div>

<?php
get_footer();
