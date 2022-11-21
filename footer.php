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
  <div role="presentation" aria-hidden="true" class="wave wave__footer">
    <?php get_template_part( 'template-parts/header/modal' ); ?>
  </div>
  <div class="site-info">
    <div class="company">
      <?php include get_theme_file_path( THEME_SETTINGS['logo'] ); ?>
      <p>L'ORANGE CARRÉ
Hôtel d'entreprise Lincubacteur,
ZA La Croix-Gaudin
44360 – Saint-Etienne-de-Montluc <br>
02 59 10 01 71</p>
    </div>
    <div class="social-media">
    <?php
      $linkedin = get_theme_mod( 'show_linkedin' );
      if ( $linkedin ) {
          ?>
          <a href="<?php echo( get_theme_mod( 'show_linkedin' ) ); ?>" title="Visiter la page Linkedin - nouvelle fenêtre" class="no-external-link-indicator" target="_blank">
            <?php include get_theme_file_path( THEME_SETTINGS['logo_linkedin'] ); ?>
          </a>
        <?php
      }
    ?>
    <?php
      $instagram = get_theme_mod( 'show_instagram' );
      if ( $instagram ) {
          ?>
          <a href="<?php echo( get_theme_mod( 'show_instagram' ) ); ?>" title="Visiter la page Instagram - nouvelle fenêtre" class="no-external-link-indicator" target="_blank">
            <?php include get_theme_file_path( THEME_SETTINGS['logo_insta'] ); ?>
          </a>
        <?php
      }
    ?>
    <?php
      $facebook = get_theme_mod( 'show_facebook' );
      if ( $facebook ) {
          ?>
          <a href="<?php echo( get_theme_mod( 'show_facebook' ) ); ?>" title="Visiter la page Facebook - nouvelle fenêtre" class="no-external-link-indicator" target="_blank">
            <?php include get_theme_file_path( THEME_SETTINGS['logo_facebook'] ); ?>
          </a>
        <?php
      }
    ?>
    <?php
      $youtube = get_theme_mod( 'show_youtube' );
      if ( $youtube ) {
          ?>
          <a href="<?php echo( get_theme_mod( 'show_youtube' ) ); ?>" title="Visiter la page Youtube - nouvelle fenêtre" class="no-external-link-indicator" target="_blank">
            <?php include get_theme_file_path( THEME_SETTINGS['logo_youtube'] ); ?>
          </a>
        <?php
      }
    ?>
    <?php
      $twitter = get_theme_mod( 'show_twitter' );
      if ( $twitter ) {
          ?>
          <a href="<?php echo( get_theme_mod( 'show_twitter' ) ); ?>" title="Visiter la page Twitter - nouvelle fenêtre" class="no-external-link-indicator" target="_blank">
            <?php include get_theme_file_path( THEME_SETTINGS['logo_twitter'] ); ?>
          </a>
        <?php
      }
    ?>
    <?php
      $tiktok = get_theme_mod( 'show_tiktok' );
      if ( $tiktok ) {
          ?>
          <a href="<?php echo( get_theme_mod( 'show_tiktok' ) ); ?>" title="Visiter la page Twitter - nouvelle fenêtre" class="no-external-link-indicator" target="_blank">
            <?php include get_theme_file_path( THEME_SETTINGS['logo_tiktok'] ); ?>
          </a>
        <?php
      }
    ?>
    </div>
    <?php wp_nav_menu( $menu_footer_args ) ?>
    <?php wp_nav_menu( $menu_confidentiality_args ) ?>
    <a href="/contact" class="contact-link">
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
