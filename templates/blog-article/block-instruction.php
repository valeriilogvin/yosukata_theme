<div class="col-8 instructions">
    <p class="title">Instructions</p>
    <?php
    if( get_row_layout('instructions') ) {
        echo '<ul>';
        while( the_repeater_field('instructions') ) {
            echo '<li><span class="num">' . get_sub_field('num') .'</span>' . get_sub_field('instruction') .'</li>';
        }
        echo '</ul>';
    }
    ?>
</div>