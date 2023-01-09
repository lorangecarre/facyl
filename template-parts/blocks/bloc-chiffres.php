<?php
/**
 * Bloc Chiffres Template.
 *
 * @param  array       $block       The block settings and attributes.
 * @param  string      $content     The block inner HTML (empty).
 * @param  bool        $is_preview  True during AJAX preview.
 * @param  int|string  $post_id     The post ID this block is saved to.
 * @package facyl
 */

// Build the basic block id and class
$bloc_chiffre_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'bloc-chiffres-' . $block['id'];
$block_chiffres_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_chiffres_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';

// Load values and handle defaults.
$heading      = get_field( 'chiffres_titre' );
$values  = get_field( 'chiffres_container' );
?>

<section id="<?php echo esc_attr( $bloc_chiffre_id ); ?>" class="chiffres <?php echo esc_attr( $block_chiffres_class ); ?>" >
  <h2 class="chiffres__title"><?php the_field( 'chiffres_titre' ); ?></h2>
  <?php if ( $values ) : ?>
    <ul class="chiffres__list" role="list">
    <?php foreach ( $values  as $value ) : ?>
        <li class="chiffres__listItem" role="listitem">
          <h3 class="chiffres__listItemTitle"><?php echo esc_html( $value['chiffres_valeur'] ); ?></h3>
          <p class="chiffres__listItemText"><?php echo esc_html( $value['chiffres_description'] ); ?></p>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php else : ?>
      <p><strong>Veuillez renseigner au moins un chiffre clé !</strong></p>
  <?php endif; ?>
</section>
