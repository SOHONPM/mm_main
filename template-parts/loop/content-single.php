<?php

/**
 * Single post partial template.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since   1.0.0
 * @package themezero
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php if (has_post_thumbnail()) : ?>

		<?php the_post_thumbnail('full', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']) ?>

	<?php endif; ?>
	<?php the_content(); ?>

</article><!-- #post-## -->