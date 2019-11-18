<?php

/**
 *  Template to display modules
 *
 *  Template Name: Landing Module
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @since   1.0.0
 * @package themezero
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}
get_header('landing'); ?>

<?php //get_template_part( 'template-parts/loop/content', 'banner' );  
?>
<div class="landing-container">
    <?php

    // check if the flexible content field has rows of data
    if (have_rows('modules')) :

        // loop through the rows of data

        while (have_rows('modules')) : the_row();
            get_template_part('template-parts/modules/' . get_row_layout());
        endwhile;

    else :

    // no layouts found

    endif;

    ?>
</div>

<?php get_footer('landing'); ?>