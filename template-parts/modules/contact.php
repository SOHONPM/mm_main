<section class="contact-section" style="background:url(<?php echo get_sub_field('background') ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-6 form-section">
                <div class="form__horizontal">
                    <?php echo get_sub_field('title') ?>
                    <?php
                    if ($headline_form = get_sub_field('form')) {
                        echo $headline_form;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>