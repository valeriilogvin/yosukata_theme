<div class="md-modal md-effect-1" id="modal-question">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="flex row">
            <div class="col-4">
                <h2 class="modal-name"><?php the_field('question',20) ?></h2>
            </div>
            <div class="col-8">
                <p class="text">
                    <?php the_field('question_text',20) ?>
                </p>

                <?php echo do_shortcode( ' [contact-form-7 id="1143" title="Ask a question" html_class="modal-form flex row"]' ); ?>

                <!--<form action="" class="modal-form flex row" method="post">
                    <input name="Name2" type="text" class="col-6" placeholder="Name" required>
                    <input name="E-mail2" type="text" class="col-6" placeholder="E-mail" required>
                    <textarea class="col-12" name="massage" rows="5" placeholder="Message"></textarea>
                    <div class="error"><span></span></div>
                    <button class="button black" type="submit"><span class="back"></span>Send</button>
                </form>-->
            </div>
        </div>
    </div>
</div>
