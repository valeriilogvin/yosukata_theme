<?php
// Template Name: Site map
if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="page-title" style="color: #000000;">
                        <?php the_title();?>
                </h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page site_map_page">
                    <div class="item_single_outer">
                        <div class="single_content page_content">
                            <div class="sitemapz" style="padding-bottom: 100px;">
                                <div id="mpl">
                                    <?php // Страницы
                                    $pagename = 'Pages';
                                    $args = array(
                                        'exclude'      => "48, 338, 334, 132",
                                        'exclude_tree' => '',
                                        'title_li'     => '<h3 style="color: #000000;">'.$pagename.'</h3>',
                                        'sort_column'  => 'menu_order, post_title',
                                        'sort_order'   => 'ASC',
                                        'post_type'    => 'page',
                                    );
                                    wp_list_pages($args);?>
                                </div>
                                <?php // Posts
                                $args = array(
                                    'type'         => 'post',
                                    'child_of'     => 0,
                                    'parent'       => '',
                                    'orderby'      => 'name',
                                    'order'        => 'ASC',
                                    'hide_empty'   => 1,
                                    'hierarchical' => 1,
                                    'exclude'      => 1,
                                    'include'      => '',
                                    'number'       => 0,
                                    'taxonomy'     => 'category',
                                    'pad_counts'   => false,
                                );
                                $cats = get_categories($args);
                                foreach ( $cats as $cat ) {
                                    query_posts( 'posts_per_page=-1&cat=' . $cat->cat_ID );
                                    ?>
                                    <h3><?php echo $cat->cat_name; ?></h3>
                                    <ul class="exclude_ul">
                                        <?php while ( have_posts() ) { the_post(); ?>
                                            <li><a  rel="nofollow" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></li>
                                        <?php } wp_reset_query(); ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

<?php get_footer(); ?>