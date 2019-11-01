<section class="feature-section">
    <div class="container">
        <div class="row">
            <?php
            foreach (get_sub_field('grid') as $value) {
                ?>
                <div class="col-md-4 text-center">
                    <div class="single-feature">
                        <div class="wrapper">
                            <p class="title"><?php echo $value['title'] ?></p>
                            <p class="content"><?php echo $value['content'] ?></p>
                            <img src="<?php echo $value['icon']['url'] ?>" alt="">
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>