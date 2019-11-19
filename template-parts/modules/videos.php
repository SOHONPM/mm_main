<section class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-title"><?php echo get_sub_field('title') ?></h2>
            </div>
            <?php

            // check if the flexible content field has rows of data
            if (have_rows('videos')) :

                // loop through the rows of data
                while (have_rows('videos')) : the_row();
                    ?>
                    <div class="col-md-4">
                        <div class="video-block videoWrapper">
                            <?php echo get_sub_field('video'); ?>
                            <div class="inner-text">
                                <p class="title"><?php echo get_sub_field('title') ?></p>
                                <p>Mind Matters</p>
                            </div>
                        </div>
                    </div>
            <?php

                endwhile;

            else :

            // no layouts found

            endif;

            ?>
        </div>
    </div>
</section>