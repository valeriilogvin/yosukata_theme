<p class="text-block col-8">
    <?php
    if( get_row_layout('text-list-dots') ) {
        while( the_repeater_field('text-list-dots') ) {
            echo '
                    <span class="li-dot">' . get_sub_field('li') .'</span>
            ';
        }
    }
    ?>
</p>
