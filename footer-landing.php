<?php

/**
 * Footer Template
 *
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @since   1.0.0
 * @package themezero
 */


// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
} ?>

<footer id="colophon" class="site-footer" itemscope itemtype="http://schema.org/WPFooter">
    <div class="landing-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-logo">
                        <a href="<?php echo site_url() ?>"><?php themezero_get_logo() ?></a>
                    </div>
                    <div class="content">
                        <p>NeuroCoding<sup>©</sup> is the science and skill of using the neuroplastic nature of your brain to create new patterns and connections that allow you to access your full potential.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="copyright">
                        <p>© 2017 mindmatters.me | Founders of NeuroCoding<sup>©</sup></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php

wp_footer(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5579KJN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>