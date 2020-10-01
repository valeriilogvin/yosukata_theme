<?php
/**
 * Template Name: FAQ
 */

if ( is_home() ){
    get_header('home');

}
else {
    get_header('pages');
}
?>

    <div class="sect-faq">

        <div class="container">
            <h2>FAQ</h2>
            <!--<div class="faq-block">
                <?php
            $posts = get_posts( array(
                'numberposts' => 25,
                'post_type'   => 'faq',
                'order'       => 'ASC',
                'suppress_filters' => true,
            ));
            foreach( $posts as $post ){ setup_postdata($post);
                ?>
                <div >
                    <div class="pane_header"><?php the_field('question'); ?></div>
                    <div class="subitem"><?php the_field('answer'); ?></div>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>
            </div>-->

            <div class="faq-block">
                <div class="faq-title">
                    <h3>Steel Woks</h3>
                    <span class="line"></span>
                </div>
                <div class="pane-block">
                    <div class="pane_header">Should I wash the wok before using it?</div>
                    <div class="subitem">Yes and no. Cooking tomatoes and other acidic food in your seasoned wok will
                        remove some of the patina, however, this lost patina will be re-acquired after one or two use.
                        We recommend for the first few times of use avoid cooking with any acid such as vinegar, lemons
                        and tomatoes.
                    </div>
                </div>
                <div class="pane-block">
                    <div class="pane_header">Should I wash the wok before using it?</div>
                    <div class="subitem">Yes and no. Cooking tomatoes and other acidic food in your seasoned wok will
                        remove some of the patina, however, this lost patina will be re-acquired after one or two use.
                        We recommend for the first few times of use avoid cooking with any acid such as vinegar, lemons
                        and tomatoes.
                    </div>
                </div>
                <div class="pane-block">
                    <div class="pane_header">Should I wash the wok before using it?</div>
                    <div class="subitem">Yes and no. Cooking tomatoes and other acidic food in your seasoned wok will
                        remove some of the patina, however, this lost patina will be re-acquired after one or two use.
                        We recommend for the first few times of use avoid cooking with any acid such as vinegar, lemons
                        and tomatoes.
                    </div>
                </div>
                <div class="pane-block">
                    <div class="pane_header">Should I wash the wok before using it?</div>
                    <div class="subitem">Yes and no. Cooking tomatoes and other acidic food in your seasoned wok will
                        remove some of the patina, however, this lost patina will be re-acquired after one or two use.
                        We recommend for the first few times of use avoid cooking with any acid such as vinegar, lemons
                        and tomatoes.
                    </div>
                </div>
            </div>
            <div class="faq-block">
                <div class="faq-title">
                    <h3>Steel Woks</h3>
                    <span class="line"></span>
                </div>
                <div class="pane-block">
                    <div class="pane_header">Should I wash the wok before using it?</div>
                    <div class="subitem">Yes and no. Cooking tomatoes and other acidic food in your seasoned wok will
                        remove some of the patina, however, this lost patina will be re-acquired after one or two use.
                        We recommend for the first few times of use avoid cooking with any acid such as vinegar, lemons
                        and tomatoes.
                    </div>
                </div>
                <div class="pane-block">
                    <div class="pane_header">Should I wash the wok before using it?</div>
                    <div class="subitem">Yes and no. Cooking tomatoes and other acidic food in your seasoned wok will
                        remove some of the patina, however, this lost patina will be re-acquired after one or two use.
                        We recommend for the first few times of use avoid cooking with any acid such as vinegar, lemons
                        and tomatoes.
                    </div>
                </div>
                <div class="pane-block">
                    <div class="pane_header">Should I wash the wok before using it?</div>
                    <div class="subitem">Yes and no. Cooking tomatoes and other acidic food in your seasoned wok will
                        remove some of the patina, however, this lost patina will be re-acquired after one or two use.
                        We recommend for the first few times of use avoid cooking with any acid such as vinegar, lemons
                        and tomatoes.
                    </div>
                </div>
                <div class="pane-block">
                    <div class="pane_header">Should I wash the wok before using it?</div>
                    <div class="subitem">Yes and no. Cooking tomatoes and other acidic food in your seasoned wok will
                        remove some of the patina, however, this lost patina will be re-acquired after one or two use.
                        We recommend for the first few times of use avoid cooking with any acid such as vinegar, lemons
                        and tomatoes.
                    </div>
                </div>
            </div>
        </div>
        <img src="img/parsley.png" alt="" class="sect-faq-img parsley1">
        <img src="img/parsley.png" alt="" class="sect-faq-img parsley2">
        <img src="img/parsley.png" alt="" class="sect-faq-img parsley3">
        <img src="img/tomato.png" alt="" class="sect-faq-img tomato1">
        <img src="img/tomato.png" alt="" class="sect-faq-img tomato2">
        <img src="img/tomato.png" alt="" class="sect-faq-img tomato3">
    </div>

<?php
get_footer();