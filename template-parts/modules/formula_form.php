<section class="formula-section">
    <div class="container">
        <div class="row formula">
            <div class="col-md-12">
                <p class="title"><?php echo get_sub_field('title') ?></p>
            </div>
            <div class="col-md-12">
                <p class="content"><?php echo get_sub_field('content') ?></p>
            </div>
            <div class="col-md-12 formula_img">
                <img src="<?php echo get_sub_field('image') ?>" alt="formula">
            </div>
        </div>
        <div class="row form">
            <div class="col-md-12">
                <p class="title"><?php echo get_sub_field('form_title') ?></p>
            </div>
            <div class="col-md-12">
                <p class="subtitle"><?php echo get_sub_field('form_subtitle') ?></p>
            </div>
            <div class="col-md-12">
                <?php
                if ($form = get_sub_field('form')) {

                    echo $form;
                }
                ?>
            </div>
        </div>
    </div>
</section>