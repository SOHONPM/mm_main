<section class="hero-section" style="background:url(<?php echo get_sub_field('background') ?>)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-9">
                <div class="wrapper">
                    <h1 class="title"><?php echo get_sub_field('title') ?></h1>
                </div>
            </div>
            <div class="col-md-12 form-section col-lg-3">
                <div class="form__horizontal">
                    <h1 class="form-title"><?php echo get_sub_field('form_title') ?></h1>
                    <?php
                    if ($headline_form = get_sub_field('hero_form')) {

                        echo $headline_form;
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</section>