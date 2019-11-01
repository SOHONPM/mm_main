<section class="solutions-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title"><?php echo get_sub_field('title') ?></h1>
                <hr>
            </div>
        </div>
        <div class="row">

            <?php
            foreach (get_sub_field('grid') as $value) {
                ?>
                <div class="col-md-4 grid">
                    <div class="col-md-12 icon" style="background-color:<?php echo $value['background_color'] ?>">
                        <img src="<?php echo $value['icon']['url'] ?>" alt="icon">
                        <p class="title"><?php echo $value['title'] ?></p>
                        <p class="content"><?php echo $value['content'] ?></p>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>