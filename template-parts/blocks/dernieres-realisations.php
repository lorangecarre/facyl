<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'dernieres-realisations-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'dernieres-realisations';
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
  <div class="articles">
      <?php while ( $articles->have_posts() ) {
          $articles->the_post(); ?>
          <div class="article">
            <?php echo get_the_post_thumbnail( get_the_ID(), 'large' ); ?>
            <div class="article-info">
              <h3><?php echo esc_html( get_the_title() ) ?></h3>
              <p><?php echo esc_html( get_the_excerpt() ) ?></p>
              <a href="<?php echo esc_html( get_the_guid() ) ?>" target="_blank">Lire la suite</a>
            </div>
          </div>
      <?php } ?>
  </div>
</section>
