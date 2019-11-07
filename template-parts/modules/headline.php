<section class="headline-section" style="background:transparent url(<?php echo get_sub_field('background') ?>) center center no-repeat padding-box">
    <div class="container">
        <div class="row">
            <?php if (get_sub_field('hero_form')) : ?>
                <div class="col-md-9 col-lg-8">
                    <h1 class="title"><?php echo get_sub_field('title') ?></h1>
                    <?php if (get_sub_field('subtitle')) : ?><h2 class="subtitle"><?php echo get_sub_field('subtitle'); ?></h2>
                    <?php endif ?>
                </div>
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
            <?php else : ?>
                <div class="col-md-12 col-lg-12">
                    <h1 class="title title-full"><?php echo get_sub_field('title') ?></h1>
                    <?php if (get_sub_field('subtitle')) : ?><h2 class="subtitle subtitle-full <?php echo get_sub_field('title') ? '' : 'no_title' ?>"><?php echo get_sub_field('subtitle'); ?></h2>
                    <?php endif ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>