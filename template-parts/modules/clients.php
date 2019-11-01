<section class="client-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title"><?php echo get_sub_field('title') ?></h1>
                <div class="row">
                    <?php
                    foreach (get_sub_field('client_logo') as $value) {
                        ?>
                        <div class="col-md-2">
                            <img src='<?php echo $value['logo']['url'] ?>'>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
</section>