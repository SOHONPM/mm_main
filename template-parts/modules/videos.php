<section class="video-section">
    <div class="container">
        <div class="row">
            <?php

            // check if the flexible content field has rows of data
            if (have_rows('videos')) :

                // loop through the rows of data
                while (have_rows('videos')) : the_row();
                    ?>
                    <div class="col-md-6">
                        <div class="content">
                            <?php echo get_sub_field('video'); ?>
                            <p class="title"><?php echo get_sub_field('title') ?></p>
                            <p>Mind Matters</p>
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