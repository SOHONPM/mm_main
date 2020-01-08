<section class="feature-section">
    <div class="container">
        <?php if (get_sub_field('title')) : ?>
            <div class="col-md-12">
                <h2 class="title"><?php echo get_sub_field('title') ?></h2>
            </div>
        <?php endif ?>
        <div class="row">
            <?php
            foreach (get_sub_field('grid') as $value) {
            ?>
                <div class="col-md-4 text-center">
                    <div class="single-feature">
                        <div class="wrapper">
                            <?php if ($value['image_position'] == "top") : ?>
                                <img class="top" src="<?php echo $value['icon']['url'] ?>" alt="">
                            <?php endif ?>
                            <p class="title"><?php echo $value['title'] ?></p>
                            <p class="content"><?php echo $value['content'] ?></p>
                            <?php if ($value['image_position'] == "bottom") : ?>
                                <img class="bottom" src="<?php echo $value['icon']['url'] ?>" alt="">
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>