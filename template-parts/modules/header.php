<header id="landing" class="site-header" itemscope itemtype="http://schema.org/WPHeader">
    <div class="site-header__top">
        <div class="container">
            <div class="grid">
                <div class="col--right">
                    <div class='header-info'>
                        <div class="col-md-12">
                            <div class="wrapper">
                                <p class="info button-dropdown " data-toggle="modal" data-target="#email"><?php echo "<span class='email'><i class='fas fa-envelope'></i> " . get_theme_mod('header_info') . "</span>" ?></p>
                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" id="email" tabindex="-1" role="dialog" aria-labelledby="emailLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form__horizontal">
                                                    <h1 class="form-title">Email Us</h1>
                                                    <?php echo do_shortcode('[gravityform id="16" title="true" description="true" ajax="true"]') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="call">
                                    <a class="info" href="tel:<?php echo get_theme_mod('phone') ?>"><?php echo "<span class='call-us'><i class='fas fa-phone-alt'></i> " . get_theme_mod('header_info_2') . "</span>" ?></a>

                                    <?php
                                    wp_nav_menu(array(
                                        'depth'             => 1,
                                        'theme_location' => 'social',
                                        'menu_class'      => 'social-links',
                                        'container'       => false,
                                        'container_class' => false,
                                        'container_id'    => false,
                                        'walker'          => new WP_Bootstrap_Navwalker(),
                                    ));

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container">
                <!-- Site-logo -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="site-logo">
                            <a href="<?php echo site_url() ?>"><?php themezero_get_logo() ?></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="count">
                            <p><span><?php echo get_sub_field('slots_left') ?></span> out of <?php echo get_sub_field('max_slots') ?></p>
                            <p>sessions remaining</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>