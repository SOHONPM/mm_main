<section class="profile-section">
    <div class="container">
        <div class="row">
            <?php
            foreach (get_sub_field('profile') as $key => $value) {
                ?>
                <div class="col-md-6">
                    <div class="profile-pic">
                        <img src="<?php echo $value['image'] ?>">
                    </div>
                    <div class="social-link">
                        <?php
                            foreach ($value['social_media'] as $key => $social) {
                                switch ($social['social_media']) {
                                    case 'Facebook':
                                        echo '<a href="' . $social['link'] . '"/><i class="fab fa-facebook-square"></i></a>';
                                        break;
                                    case 'Linkedin':
                                        echo '<a href="' . $social['link'] . '"/><i class="fab fa-linkedin"></i></a>';
                                        break;
                                    case 'Twitter':
                                        echo '<a href="' . $social['link'] . '"/><i class="fab fa-twitter-square"></i></a>';
                                        break;
                                    case 'Instagram':
                                        echo '<a href="' . $social['link'] . '"/><i class="fab fa-instagram"></i></a>';
                                        break;

                                    default:
                                        # code...
                                        break;
                                }
                            }
                            ?>
                    </div>
                    <div class="name-div">
                        <p class="name"> <?php echo $value['name'] ?></p>
                    </div>
                    <div class="content">
                        <?php echo $value['content'] ?>
                    </div>
                    <div class="learn-more-link">
                        <?php if ($value['link']) : ?>
                            <a class="link" href="<?php echo $value['link'] ?>">
                                To get some more <?php echo $value['name'] ?>, click here.
                            </a>
                        <?php endif ?>
                    </div>

                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>