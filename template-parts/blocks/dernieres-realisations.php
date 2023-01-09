<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'realisations-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'realisations';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

// Load values and handle defaults.
$title = get_field( 'title_block' ) ?: 'Titre';

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'post__in' => get_option( 'sticky_posts' ),
  'ignore_sticky_posts' => 1,
);
$articles = new WP_Query( $args );
?>

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class_name ); ?>" >
  <h2><?php echo esc_html( $title ) ?></h2>
  <ul class="articles" role="list">
  <?php
  while ( $articles->have_posts() ) {
      $articles->the_post();
        get_template_part( 'template-parts/component/realisations' );
      } ?>
  </ul>
</section>
