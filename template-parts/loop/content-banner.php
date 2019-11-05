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
<div class="banner banner__sub" itemscope itemtype="http://schema.org/WebPageElement" <?php echo (is_404()) ? "style='background:transparent url(" . get_template_directory_uri() . "/assets/images/hero_bg.png) center top no-repeat padding-box'" : "style='background:#2f2f2f'" ?>>

	<div class="container">
		<div class="banner__inner">

			<div class="banner__header">

				<?php if (is_archive()) : ?>
					<h1 class="banner__title">
						<?php
							the_archive_title('<h1 class="page-title">sfdfsd', '</h1>');
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