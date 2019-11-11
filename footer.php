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
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="site-logo">
          <a href="<?php echo site_url() ?>"><?php themezero_get_logo() ?></a>
        </div>
        <div class="content">
          <p><?php echo get_theme_mod('footer_description') ?></p>
        </div>
      </div>
      <div class="col-md-3">
        <p class="menu-title">Menu</p>
        <?php

        wp_nav_menu(array(
          'depth'           => 1,
          'theme_location' => 'legal',
          'menu_class'    => 'footer-menu',
          'container'       => 'div',
          'container_class' => false,
          'container_id'    => false,
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));

        ?>
      </div>
      <div class="col-md-3">
        <p class="contact-us">Contact Us</p>
        <p class="contact-address"><?php echo get_theme_mod('address') ?></p>
        <p class='phone-number'><?php echo 'PHONE ' . get_theme_mod('phone') ?></p>
      </div>
      <div class="col-md-12">
        <div class="copyright">
          <p><?php echo get_theme_mod('copyright') ?></p>
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