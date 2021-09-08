<div class="md-modal md-effect-1" id="modal-register">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="flex row">
            <div class="col-4">
                <h2 class="modal-name"><?php the_field('registration_form_title',20) ?></h2>
            </div>
            <div class="col-8">
                <p class="text"><?php the_field('registration_form_text',20) ?></p>

                <?php echo do_shortcode( ' [contact-form-7 id="439" title="Register" html_class="modal-form flex row"]' ); ?>

                <!--<form action="" class="modal-form flex row">
                    <input name="Name" type="text" class="col-6" placeholder="Name" required>
                    <input name="E-mail" type="text" class="col-6" placeholder="E-mail" required>
                    <input name="Place" type="text" class="col-6" placeholder="Place of purchase (store etc.)" required>
                    <input name="Order" type="text" class="col-6" placeholder="Order ID" required>
                    <select name="select" required class="col-12">
                        <option disabled="" selected="">Select purchased item</option>
                        <option value="type-of-work-1">one</option>
                        <option value="type-of-work-1">two</option>
                    </select>
                    <div class="error"><span></span></div>
                    <button class="button black" type="submit"><span class="back"></span>Register</button>
                </form>-->

            </div>
        </div>
    </div>
</div>
