<?php
/**
 * Accueil-header
 *
 * @package facyl
 */

namespace Facyl;

$title = get_field( 'title' );
$content = get_field( 'content' );
$sub_title = get_field( 'sub_title' );

if ( empty( $title ) ) {
  return;
} ?>
<?php if ( get_field( 'image_de_fond' ) ) : ?>
<section class="block block-header-home has-light-bg" style="background-image:url(<?php the_field( 'image_de_fond' ); ?>);">
<div  class="background-header" >
<?php endif; ?>

  <div class="container">

    <div class="content">
      <?php if ( ! empty( $title ) ) : ?>
        <h1 class="block-title"><?php echo esc_html( $title ); ?></h1>
      <?php endif; ?>

      <?php if ( ! empty( $sub_title ) ) : ?>
        <h2 class="block-title"><?php echo esc_html( $sub_title ); ?></h2>
      <?php endif; ?>

      <?php if ( ! empty( $content ) ) : ?>
        <?php echo wp_kses_post( wpautop( $content ) ); ?>
      <?php endif; ?>

      <?php if ( have_rows( 'boutons' ) ) : ?>
          <div class="boutons-container">
          <?php while ( have_rows( 'boutons' ) ) : the_row(); ?>

              <a class="<?php the_sub_field( 'couleur' ); ?>" href="<?php the_sub_field( 'url_bouton' ); ?>"><?php the_sub_field( 'texte_bouton' ); ?><?php include get_theme_file_path( THEME_SETTINGS['chevron_right'] ); ?></a>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>
    </div>
    <a href="#more" class="scroll-icon"><svg focusable="false" aria-hidden="true" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.25 9.99989C11.25 10.4141 11.5858 10.7499 12 10.7499C12.4142 10.7499 12.75 10.4141 12.75 9.99989V6.99989C12.75 6.58567 12.4142 6.24989 12 6.24989C11.5858 6.24989 11.25 6.58567 11.25 6.99989V9.99989Z" fill="black"/><path fill-rule="evenodd" clip-rule="evenodd" d="M18.75 9.07422C18.75 5.75272 16.3336 2.92485 13.0527 2.40682C12.3552 2.29669 11.6448 2.29669 10.9473 2.40682C7.6664 2.92485 5.25 5.75272 5.25 9.07422V14.9256C5.25 18.2471 7.6664 21.0749 10.9473 21.593C11.6448 21.7031 12.3552 21.7031 13.0527 21.593C16.3336 21.0749 18.75 18.247 18.75 14.9256L18.75 9.07422ZM12.8188 3.88846C15.3706 4.29137 17.25 6.49083 17.25 9.07422L17.25 14.9256C17.25 17.5089 15.3706 19.7084 12.8188 20.1113C12.2763 20.197 11.7237 20.197 11.1812 20.1113C8.62942 19.7084 6.75 17.5089 6.75 14.9256L6.75 9.07422C6.75 6.49083 8.62943 4.29137 11.1812 3.88846C11.7237 3.8028 12.2763 3.8028 12.8188 3.88846Z" fill="black"/></svg></a>
  </div>
      </div>
      </section>
<div id="more"></div>
