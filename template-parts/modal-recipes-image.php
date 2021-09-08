<div class="md-modal md-effect-1" id="modal-recipes-image">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <?php
        if( get_row_layout('photo') ) {
            echo '  <div class="blog-article-slider col-8">';
            while( the_repeater_field('photo') ) {
                echo '
                <div data-modal="modal-recipes-image" class="slider img-block img-block-hover md-trigger"><img src="' . get_sub_field('photo-slider') .'" alt=""></div>
                ';
            }
            echo '</div>';
        }
        ?>
    </div>
</div>
