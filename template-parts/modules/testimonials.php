<section class="testimonials-section" style="background:<?php echo get_sub_field("background") ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title"><?php echo get_sub_field('title') ?></h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                    foreach (get_sub_field('testimonials') as $key => $value) {
                        ?>
                        <li data-target="#carouselExampleControls" data-slide-to="<?php echo $key ?>" class=" <?php echo $key == 0 ? 'active' : '' ?>"></li>
                    <?php } ?>
                </ol>
                <div class="carousel-inner">
                    <?php
                    foreach (get_sub_field('testimonials') as $key => $value) {
                        ?>
                        <div class="carousel-item <?php echo $key == 0 ? 'active' : '' ?>">
                            <div class="carousel-caption">
                                <div class="image-cropper">
                                    <img class='profile' src="<?php echo $value['profile'] ?>">
                                </div>
                                <p class="name"><?php echo ucwords(strtolower($value['name'])) ?></p>
                                <p class="position"><?php echo ucwords(strtolower($value['position'])) ?></p>
                                <p class="content"><?php echo $value['content'] ?></p>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
                <a class="carousel-arrow carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <div class="prev"></div>
                </a>
                <a class="carousel-arrow carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <div class="next"></div>
                </a>
            </div>
        </div>
    </div>
</section>