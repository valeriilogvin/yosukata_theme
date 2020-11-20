<?php $posts = get_posts(array(
    'numberposts' => -1,
    'post_type' => 'catalogue',
    'suppress_filters' => true,));
foreach ($posts as $post) {
    setup_postdata($post); ?>
        <option><?php the_title() ?></option>
    <?php }
wp_reset_postdata(); ?>