<?php

/**
 * Display Content Banner
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since   1.0.0
 * @package themezero
 */


?>
<!-- Banner -->
<div class="banner banner__sub  <?php echo (is_singular()) ? 'banner__sub-alt' : '' ?>" itemscope itemtype="http://schema.org/WebPageElement" <?php echo (is_404()) ? "style='background-image: url(" . get_template_directory_uri() . "/assets/images/hero_bg.png)'" : "style='background-color:#7C004E'" ?>>

	<div class="container">
		<div class="banner__inner">

			<div class="banner__header">

				<?php if (is_archive()) : ?>
					<h1 class="banner__title">
						<?php
							the_archive_title('<h1 class="page-title">', '</h1>');
							the_archive_description('<div class="taxonomy-description">fsddsf', '</div>');
							?>
					</h1>
				<?php elseif (is_404()) : ?>
					<h1 class="banner__title">404</h1>
				<?php else : ?>
					<h1 class="banner__title"><?php echo get_the_title() . 'test' ?></h1>
				<?php endif; ?>



			</div>

		</div>
	</div>
</div>
<!-- ./banner -->