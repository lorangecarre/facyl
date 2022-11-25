<?php
/**
 * Navigation layout.
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:22:26
 * @Last Modified by: mikey.zhaopeng
 * @Last Modified time: 2022-09-30 17:04:48
 *
 * @package facyl
 */

namespace Air_Light;

?>
<div class="second-navigation-wrapper">
  <a class="button button-small button-isContact buttonNonSticky" href="/contact">Nous contacter</a>
  <button tabindex="0" id="dialog_open_button" type="button" aria-haspopup="dialog" aria-controls="dialog" title="Accessibilité, gérer les paramètres"><?php include get_theme_file_path( THEME_SETTINGS['accessibilite'] ); ?></button>
</div>

<div class="main-navigation-wrapper" id="main-navigation-wrapper">
  <!-- NB! Accessibility: Add/remove has-visible-label class for button if you want to enable/disable visible "Show menu/Hide menu" label for seeing users -->
  <button aria-controls="nav" id="nav-toggle" class="nav-toggle hamburger" type="button" aria-label="<?php echo esc_html( get_default_localization( 'Ouvrir le menu principal' ) ); ?>">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
    <span id="nav-toggle-label" class="nav-toggle-label"><?php echo esc_html( get_default_localization( 'Ouvrir le menu principal' ) ); ?></span>
  </button>

  <nav id="nav" class="nav-primary nav-menu" aria-label="<?php echo esc_html( get_default_localization( 'Navigation principale' ) ); ?>">

    <?php wp_nav_menu( array(
      'theme_location' => 'primary',
      'container'      => false,
      'depth'          => 4,
      'menu_class'     => 'menu-items',
      'menu_id'        => 'main-menu',
      'echo'           => true,
      'fallback_cb'    => __NAMESPACE__ . '\Nav_Walker::fallback',
      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'has_dropdown'   => true,
      'walker'         => new Nav_Walker(),
    ) ); ?>
  </nav>
</div>
