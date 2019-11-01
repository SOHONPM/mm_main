<section class="connect_with_us-section">
    <div class="container">
        <h1 class="title"><?php echo get_sub_field('title') ?></h1>
        <div class="wrapper">
            <?php
            if (have_rows('social_media')) : $count = 0
                ?>
                <?php
                    while (have_rows('social_media')) : the_row();
                        switch (get_sub_field('social_media')) {
                            case 'Facebook':
                                echo '<a href="' . get_sub_field('link') . '"/><i class="fab fa-facebook-f"></i></a>';
                                break;
                            case 'Linkedin':
                                echo '<a href="' . get_sub_field('link') . '"/><i class="fab fa-linkedin-in"></i></a>';
                                break;
                            case 'Twitter':
                                echo '<a href="' . get_sub_field('link') . '"/><i class="fab fa-twitter"></i></a>';
                                break;
                            case 'Instagram':
                                echo '<a href="' . get_sub_field('link') . '"/><i class="fab fa-instagram"></i></a>';
                                break;

                            default:
                                # code...
                                break;
                        }
                        ?>
                    <?php
                        endwhile;
                        ?>

                <?php
                endif
                ?>
                <div class="content"><?php echo get_sub_field('content') ?></div>
        </div>
    </div>
</section>