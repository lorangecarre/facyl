<?php
/**
 * Bloc Tarifs Template.
 *
 * @param  array       $block       The block settings and attributes.
 * @param  string      $content     The block inner HTML (empty).
 * @param  bool        $is_preview  True during AJAX preview.
 * @param  int|string  $post_id     The post ID this block is saved to.
 * @package facyl
 */

// Build the basic block id and class
$bloc_tarif_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'bloc-tarifs-' . $block['id'];
$block_tarifs_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_tarifs_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';

// Load values and handle defaults.
$title = get_field( 'plans_blockTitle' );
?>

<section id="<?php echo esc_attr( $bloc_tarif_id ); ?>" class="tarifs <?php echo esc_attr( $block_tarifs_class ); ?>" >
  <h2 class="tarifs__mainTitle"><?php echo esc_html( $title ); ?></h2>
  <?php if ( have_rows( 'plans' ) ) : ?>
    <ul class="tarifs__plans">
    <?php while ( have_rows( 'plans' ) ) : the_row(); ?>
      <li class="plan">
        <header class="plan__header">
          <h3 class="plan__title"><?php echo esc_html( $parent_title = get_sub_field( 'plan_title' ) ); ?></h3>
          <p class="plan__price"><?php echo esc_html( $parent_price = get_sub_field( 'plan_price' ) ); ?></p>
        </header>
        <?php if ( have_rows( 'plan_prestations' ) ) : ?>
        <ul class="plan__prestations close">
        <?php while ( have_rows( 'plan_prestations' ) ) : the_row(); ?>
          <li class="plan__prestation"><?php echo esc_html( $prestation = get_sub_field( 'plan_prestation_description' ) ); ?></li>
        <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        <?php if ( get_sub_field( 'plan_buttonLink' ) !== '' || get_sub_field( 'plan_mail' ) !== '' || get_sub_field( 'plan_phone' ) !== '' ) : ?>
        <footer class="plan__footer close">
          <?php if ( have_rows( 'plan_buttonLink' ) !== '' ) : ?>
          <a class="plan__button" href="<?php echo esc_html( $parent_btn_texte = get_sub_field( 'plan_buttonLink' ) ); ?>">
            <?php echo esc_html( $parent_btn_texte = get_sub_field( 'plan_buttonText' ) ); ?> <?php include get_theme_file_path( THEME_SETTINGS['chevron_right'] ); ?>
          </a>
          <?php endif; ?>
          <?php if ( get_sub_field( 'plan_mail' ) !== '' ) : ?>
          <a class="plan__mail" href="mailto:<?php echo esc_html( $parent_mail = get_sub_field( 'plan_mail' ) ); ?>">
            <?php echo esc_html( $parent_mail = get_sub_field( 'plan_mail' ) ); ?>
          </a>
          <?php endif; ?>
          <?php if ( get_sub_field( 'plan_phone' ) !== '' ) : ?>
          <a class="plan__phone" href="tel:<?php echo esc_html( $parent_phone = get_sub_field( 'plan_phone' ) ); ?>">
            <?php echo esc_html( $parent_phone = chunk_split( trim( get_sub_field( 'plan_phone' ) ), 2, ' ' ) ); ?>
          </a>
          <?php endif; ?>
        </footer>
        <span id="plan__button" class="plan__buttonOpen" aria-hidden="true"><?php include get_theme_file_path( THEME_SETTINGS['chevron_up'] ); ?></span>
        <?php endif; ?>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>
</section>
