<div class="md-modal md-effect-1" id="modal-coupon">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="flex row">
            <div class="col-4">
                <h2 class="modal-name"><?php the_field('coupon_form',20) ?></h2>
            </div>
            <div class="col-8">
                <p class="text">
                    <?php the_field('coupon_form_text',20) ?>
                </p>

                <?php echo do_shortcode( ' [contact-form-7 id="441" title="Coupon" html_class="modal-form flex row"]' ); ?>

                <!--<form action="" class="modal-form flex row">
                    <input name="email" type="text" class="col-12" placeholder="Your e-mail here" required>
                    <div class="error"><span></span></div>
                    <button class="button black" type="submit"><span class="back"></span>Get my code</button>
                </form>-->

            </div>
        </div>
    </div>
</div>
