<div class="col-8">
    <span class="title-h2"><?php the_sub_field('text') ?></span>
    <a class="video-block md-trigger" data-modal="modal-video" style="background-image: url('<?php the_sub_field('photo') ?>')">
        <div class="watch"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/play.png" alt=""></div>
    </a>
</div>
<div class="md-modal md-effect-1" id="modal-video">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <?php the_sub_field('link') ?>
    </div>
</div>
<div class="md-overlay"></div>