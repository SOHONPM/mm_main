<section class="form_image-section">
    <div class="container">
        <div class="form__horizontal">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="form-title"><?php echo get_sub_field('form_title'); ?></h1>
                </div>
                <div class="col-md-6">
                    <?php echo get_sub_field('form'); ?>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_sub_field('image'); ?>">
                </div>
            </div>
        </div>
    </div>
</section>