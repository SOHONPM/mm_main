<?php

/**
 * Theme Header
 *
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @since   1.0.0
 * @package themezero
 *
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<span class="fa fa-spinner fa-spin" aria-hidden="true"></span>
		</div>
	</div>
	<!-- ./Preloader -->
	<!-- Site-header -->
	<header id="masthead" class="site-header" itemscope itemtype="http://schema.org/WPHeader">
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
													<?php echo do_shortcode('[gravityform id="1" title="true" description="true"]') ?>
												</div>
											</div>
										</div>
									</div>

									<div class="call">
										<p class="info"><?php echo "<span class='call-us'><i class='fas fa-phone-alt'></i> " . get_theme_mod('header_info_2') . "</span>" ?></p>

										<?php
										wp_nav_menu(array(
											'depth'	         => 1,
											'theme_location' => 'social',
											'menu_class' 	 => 'social-links',
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
				<div class="container">

					<!-- Site-logo -->
					<div class="site-logo">
						<a href="<?php echo site_url() ?>"><?php themezero_get_logo() ?></a>
					</div>
					<!-- ./Site-logo -->

					<?php if (has_nav_menu('top')) : ?>
						<!-- Site Nav -->
						<div class="site-nav">

							<?php get_template_part('template-parts/navigation/main', 'menu'); ?>
							<!-- <?php //if( get_theme_mod('header_button') ) : 
										?>
			 	 		<?php //echo get_theme_mod('header_button') 
								?>
					  <?php //endif; 
							?> -->
						</div>

						<!-- . Site Nav -->
					<?php endif; ?>
				</div>
			</div>
	</header>
	<!-- ./Site-header -->
	<!-- Accessibility -->
	<div class="container screen-reader-text">
		<a href="#main"><?php __('Skip to main content', 'themezero') ?></a>
	</div>
	<!-- ./Accessibility -->