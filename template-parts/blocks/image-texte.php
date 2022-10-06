<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'image-texte-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'image-texte';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and handle defaults.
$title = get_field( 'title_block' ) ?: 'Titre';
$text = get_field( 'text_block' ) ?: 'Texte';
$image = get_field( 'image_block' ) ?: 'Texte';
$position = get_field( 'position_image_block' ) ?: 'droite';

if ( $position[0] === 'droite' ) {
  $style_grid = 'grid-image-right';
  $style_text = 'left';
  $style_image = 'right';
} else {
  $style_grid = 'grid-image-left';
  $style_text = 'right';
  $style_image = 'left';
}

?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class_name ); ?> <?php echo esc_attr( $style_grid ); ?>" >
  <div class="block-texte <?php echo esc_attr( $style_text ) ?>">
    <h2> <?= $title ?> </h2>
    <p> <?= $text ?> </p>
  </div>
  <div class="block-image <?php echo esc_attr( $style_image ) ?>">
    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
  </div>
</div>
