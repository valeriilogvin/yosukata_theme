<div class="col-8">
    <span class="title-h2"><?php the_sub_field('text') ?></span>
    <a href="<?php the_sub_field('link') ?>" class="video-block" style="background-image: url('<?php the_sub_field('photo') ?>')">
        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
    </a>
</div>