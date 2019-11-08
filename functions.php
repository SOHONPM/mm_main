<?php

/**
 *  Themezero functions and definitions
 *
 *
 * Learn more: https://codex.wordpress.org/Functions_File_Explained
 *
 * @since   1.0.0
 * @package themezero
 */



/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Theme scripts and styling
 */
require get_template_directory() . '/inc/enqueue.php';


/**
 * Theme filters
 */
require get_template_directory() . '/inc/filters.php';

/**
 * Theme widgets
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Theme secuity
 */
require get_template_directory() . '/inc/security.php';

/**
 * Customizer for this theme.
 */
require get_template_directory() .  '/inc/customizer.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() .  '/inc/template-tags.php';

/**
 * Bootstrap Nav
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Replace default styling on comment form.
 */
require get_template_directory() . '/inc/editor.php';


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
    wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);
});
require get_template_directory() . '/inc/shortcodes.php';
?>