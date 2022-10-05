<?php
/**
 * Template for displaying the footer
 *
 * Description for template.
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:33:49
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-09-07 11:57:45
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package facyl
 */

namespace Air_Light;

$menu_footer_args = array(
  'menu' => 'footer',
  'menu_class' => '',
  'menu_id' => '',
  'container' => 'div',
  'container_class' => 'tree-site',
);

$menu_confidentiality_args = array(
  'menu' => 'confidentiality',
  'menu_class' => '',
  'menu_id' => '',
  'container' => 'div',
  'container_class' => 'legal-info',
);
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
  <div class="site-info">
    <div class="company">
      <?php include get_theme_file_path( THEME_SETTINGS['logo'] ); ?>
      <p>Maintenance mensuelle (sauvegardes, corrections de bugs, mise à jours, Intégration de vos contenus au besoin, contrôle de sécurité ...)</p>
    </div>
    <div class="social-media">
      <a href="#">
        <?php include get_theme_file_path( THEME_SETTINGS['logo_linkedin'] ); ?>
      </a>
      <a href="#">
        <?php include get_theme_file_path( THEME_SETTINGS['logo_insta'] ); ?>
      </a>
    </div>
    <?php wp_nav_menu( $menu_footer_args ) ?>
    <?php wp_nav_menu( $menu_confidentiality_args ) ?>
    <a href="#" class="contact-link">
      <div class="contact">Nous contacter <?php include get_theme_file_path( THEME_SETTINGS['chevron_right'] ); ?></div>
    </a>
  </div>
  <a href="#page" id="top" class="top no-external-link-indicator" data-version="<?php echo esc_attr( AIR_LIGHT_VERSION ); ?>">
    <span class="screen-reader-text"><?php echo esc_html( get_default_localization( 'Back to top' ) ); ?></span>
    <span aria-hidden="true"><?php include get_theme_file_path( THEME_SETTINGS['chevron_up'] ); ?></span>
  </a>
  <div class="theme-info">
    <span class="copyright">
        <?php printf( esc_html__( 'copyright &copy; 2022,', 'facyl' ) ); ?>
    </span>
    <span class="name">
        <?php printf( esc_html__( 'Thème Facyl de L\'Orange Carré.', 'facyl' ) ); ?>
    </span>
  </div>

</footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
