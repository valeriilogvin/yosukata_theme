<div class="md-modal md-effect-1" id="modal-wholesale">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="flex row">
            <div class="col-4">
                <h2 class="modal-name"><?php the_field('wholesale_form',20) ?></h2>
            </div>
            <div class="col-8">
                <p class="text"><?php the_field('wholesale_form_text',20) ?></p>

                <?php echo do_shortcode( ' [contact-form-7 id="440" title="Wholesale" html_class="modal-form flex row"]' ); ?>

                <!--<form action="" class="modal-form flex row">
                    <input name="Name" type="text" class="col-6" placeholder="Name" required>
                    <input name="E-mail" type="text" class="col-6" placeholder="E-mail" required>
                    <input name="contact" type="text" class="col-6" placeholder="Contact person" required>
                    <input name="phone" type="text" class="col-6" placeholder="Phone" required>
                    <div class="error"><span></span></div>
                    <button class="button black" type="submit"><span class="back"></span>Send</button>
                </form>-->

            </div>
        </div>
    </div>
</div>
