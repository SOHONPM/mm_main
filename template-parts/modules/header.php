<header id="masthead" class="landing-container" itemscope itemtype="http://schema.org/WPHeader">
    <div class="container">
        <div class="site-header__top">
            <div class="">
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
            <div class="site-header__middle">
                <div class="">

                    <!-- Site-logo -->
                    <div class="site-logo">
                        <a href="<?php echo site_url() ?>"><?php themezero_get_logo() ?></a>
                    </div>
                    <!-- ./Site-logo -->
                    <div class="progress-container">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>