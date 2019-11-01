<section class="grid-section" style="background:url(<?php echo get_sub_field('background') ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="title"><?php echo get_sub_field('title') ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    foreach (get_sub_field('grid') as $key => $value) {
                        ?>
                        <div class="col-md-4 grid">
                            <div class="wrapper" style="background:url(<?php echo $value["background"] ?>)">
                                <div class="number_count col-md-12">
                                    <p><?php printf("%02d", $key + 1) ?></p>
                                </div>
                                <div class="title col-md-12">
                                    <p><?php echo $value['title'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>