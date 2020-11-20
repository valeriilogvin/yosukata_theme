<div class="md-modal md-effect-1" id="modal-where-to-buy">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="flex row">
            <div class="col-4">
                <h2 class="modal-name"><?php the_field('where_to_buy',20) ?></h2>
            </div>
            <div class="col-8">
                <p class="text"><?php the_field('where_to_buy_text',20) ?></p>
                <div class="flex row" style="justify-content: center;">
                    <a href="" class="col-6 buy-button js-buy-amazon" style="display: none;" target="_blank">
                        <span>Buy at</span>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/amazon.svg" alt="">
                    </a>
                    <a href="" class="col-6 buy-button js-buy-ebay" style="display: none;" target="_blank">
                        <span>Buy at</span>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ebay.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
