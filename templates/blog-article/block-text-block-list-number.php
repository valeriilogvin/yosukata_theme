<p class="text-block col-8">
    <?php
    if( get_row_layout('text-list-number') ) {
        while( the_repeater_field('text-list-number') ) {
            echo '
                    <span class="li-number"><span class="number">' . get_sub_field('li-number') .'</span>' . get_sub_field('li') .'</span>
            ';
        }
    }
    ?>
</p>
