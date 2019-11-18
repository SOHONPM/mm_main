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
<script src="https://cdn.rawgit.com/mckamey/countdownjs/master/countdown.min.js" type="text/javascript"></script>
<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
<script>
    jQuery(document).ready(function($) {
        var now = moment(); // new Date().getTime();
        var end_date = '2019-12-06';
        //var then = moment('2019-12-06', 'YYYY-MM-DD H:i:s');
        var then = moment('2019-12-06', 'YYYY-MM-DD H:i:s');

        (function timerLoop() {

            var start = new Date().getTime();
            var end = new Date('2019-12-06').getTime();
            var distance = end - start;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            //$(".countdown-timer-months > strong").text(countdown(then).months);
            $(".countdown-timer-days > strong").text(days);
            $(".countdown-timer-hours > strong").text(hours);
            $(".countdown-timer-minutes > strong").text(minutes);
            $(".countdown-timer-seconds > strong").text(seconds);

            requestAnimationFrame(timerLoop);


        })();
    });
</script>
<?php get_footer('landing'); ?>