<section class="grid_image_text-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title"><?php echo get_sub_field('title') ?></h1>
                <hr>
                <div class="row">
                    <?php
                    foreach (get_sub_field('grid') as $key => $value) {
                        ?>
                        <div class="col-md-6">
                            <div class="wrapper">
                                <?php if ($key % 2 == 0) { ?>
                                    <div class="img-wrap">
                                        <img class='image_top' src="<?php echo $value['image']['url'] ?>">
                                    </div>
                                <?php } ?>
                                <div class="paragraph">
                                    <?php echo $value['content'] ?>
                                </div>
                                <?php if ($key % 2 == 1) { ?>
                                    <div class="img-wrap">
                                        <img class='image_down' src="<?php echo $value['image']['url'] ?>">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>