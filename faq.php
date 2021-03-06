<?php
/**
 * Template Name: FAQ
 */

if (is_home()) {
    get_header('home');

} else {
    get_header('pages');
}
?>

    <div class="sect-faq">

        <div class="container">
            <h2><?php pll_e( 'FAQ' ); ?></h2>


            <!-- acf repeater -->
            <?php
            if (get_field('faq_group')) {
                while (the_repeater_field('faq_group')) {
                    echo '
                        <div class="faq-block">
                            <div class="faq-title">
                            <h3>' . get_sub_field('faq_group_title') . '</h3>
                            <span class="line"></span>
                        </div>
                        ';
                    while (the_repeater_field('faq_sub')) {
	                    echo '
                                <p style="padding: 50px 0 7px 35px; display: block; font-size: 18px; line-height: 28px; font-weight: 700;">' . get_sub_field('faq_sub_title') . '</p>
                            ';
	                    while (the_repeater_field('faq_block')) {
		                    echo '
                            <div class="pane-block">
                                <div class="pane_header">' . get_sub_field('faq_question') . '</div>
                                <div class="subitem">' . get_sub_field('faq_response') . '</div>
                            </div>
                            ';
	                    }
                    }
                    echo '
                    </div>';
                }
            }
            ?>

        </div>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/parsley.png" alt="" class="sect-faq-img parsley1">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/parsley.png" alt="" class="sect-faq-img parsley3">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/tomato.png" alt="" class="sect-faq-img tomato1">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/tomato.png" alt="" class="sect-faq-img tomato3">
    </div>

<?php
get_footer();