<?php
if( get_row_layout('photo') ) {
    echo '  <div class="blog-article-slider col-8">';
    while( the_repeater_field('photo') ) {
        echo '
                <div class="slider img-block img-block-hover"><img src="' . get_sub_field('photo-slider') .'" alt=""></div>
                ';
    }
    echo '</div>';
}
?>