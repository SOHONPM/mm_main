<section class="hero-section" id='test' style="background:transparent url(<?php echo get_sub_field('background') ?>) center center no-repeat padding-box">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <div class="wrapper">
                    <h1 class="title"><?php echo get_sub_field('title') ?></h1>
                </div>
            </div>
            <?php if(get_sub_field('hero_form')):?>
            <div class="col-md-12 form-section col-lg-4">
                <div class="form__horizontal">
                    <h1 class="form-title"><?php echo get_sub_field('form_title') ?></h1>
                    <?php
                    if ($headline_form = get_sub_field('hero_form')) {
                        echo $headline_form;
                    }
                    ?>
                </div>
            </div>
            <?php endif ?>
        </div>
    </div>
</section>