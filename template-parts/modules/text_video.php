<section class="text_video-section <?php echo get_sub_field('video_position') == 'Right' ? '' : '_alt_bottom' ?>">
    <div class="container">
        <h2 class="title"><?php echo get_sub_field('title') ?></h2>
        <div class="row content">
            <div class="<?php echo get_sub_field('video_position') == 'Right' ? 'col-md-6' : 'col-md-12' ?>">
                <div class="content">
                    <?php echo get_sub_field('content') ?>
                </div>
            </div>
            <div class="<?php echo get_sub_field('video_position') == 'Right' ? 'col-md-6' : 'col-md-12' ?>">
                <?php echo get_sub_field('video') ?>
            </div>
        </div>
    </div>
</section>