<script src="https://cdn.rawgit.com/mckamey/countdownjs/master/countdown.min.js" type="text/javascript"></script>
<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
<script>
    jQuery(document).ready(function($) {
        var now = moment(); // new Date().getTime();
        var end_date = '<?php echo get_sub_field('countdown') ?>';
        //var then = moment('2019-12-06', 'YYYY-MM-DD H:i:s');
        var then = moment('<?php echo get_sub_field('countdown') ?>', 'YYYY-MM-DD H:i:s');
        (function timerLoop() {
            var start = new Date().getTime();
            var end = new Date('<?php echo get_sub_field('countdown') ?>').getTime();
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
<?php
