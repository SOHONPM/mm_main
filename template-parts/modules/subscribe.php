<section class="subscribe-section" style="background:<?php echo get_sub_field('background') ? 'url(' . get_sub_field('background') . ')' : '#F4F0F9' ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 form-section">
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