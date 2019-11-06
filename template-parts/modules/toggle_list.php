<section class="toggle_list-section">
    <div class="container">
        <?php
        if (have_rows('list')) : $count = 0
            ?>
            <div class="row">
                <?php
                    while (have_rows('list')) : the_row();
                        $count++;
                        ?>
                    <div class="col-sm-6 button-dropdown" data-toggle="modal" data-target="#<?php echo $count ?>">
                        <div class="item" style="background:<?php echo get_sub_field('colors') ?>">
                            <h2>
                                <?php echo get_sub_field('title'); ?>
                            </h2>
                            <p class="button-dropdown " data-toggle="modal" data-target="#<?php echo $count ?>">
                                Learn More <i class="fas fa-chevron-right"></i>
                            </p>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="<?php echo $count ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $count ?>Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo get_sub_field('content'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

                    endwhile;
                    ?>
            </div>
        <?php
        endif
        ?>

    </div>
</section>