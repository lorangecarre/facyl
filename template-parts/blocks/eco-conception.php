<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'eco-conception-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'eco-conception';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

// Load values and handle defaults.
$title = get_field( 'title_block' ) ?: 'Your testimonial here...';
$text = get_field( 'text_block' ) ?: 'Author name';

?>

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">

  <div class="eco-conception-container">
    <span class="title-container"><?php printf( esc_html__( 'Google speed test', 'facyl' ) ); ?></span>
    <div class="gauge-container">
      <svg class="gauge" viewBox="0 0 150 150" preserveAscpectRatio="xMinYMin Meet">
        <title id="gaugeTitle">Google speed test</title>
        <desc id="gaugeDesc">Ceci est une jauge correspondant au pourcentage du google speed test</desc>
        <circle class="rail" r="67" cx="75" cy="75" />
        <circle class="progress" r="67" data-target="72" cx="75" cy="75" />
      </svg>
      <span class="center percentage"><span class="value">0</span><span class="percentSymbol">%</span></span>
    </div>
  </div>

  <div class="green-it-container">
    <div class="link">
      <a href="https://www.google.com/search?channel=fs&q=google+speed+test" class="link-google-speed-test no-external-link-indicator" target="_blank">
        <svg focusable="false" aria-hidden="true" fill="currentColor" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45L531 45q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z"/></svg>
      </a>
      <a href="https://www.greenit.fr/" class="link-green-it no-external-link-indicator" target="_blank">
        <svg focusable="false" aria-hidden="true" fill="currentColor" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45L531 45q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z"/></svg>
      </a>
    </div>
    <div class="title-green-it">
      <h4 class="title">GreenIT</h4>
      <div class="green-it-note">
        <svg width="74" height="70" viewBox="0 0 74 70" fill="none" xmlns="http://www.w3.org/2000/svg">
          <title id="gaugeTitle">GreenIT</title>
          <desc id="gaugeDesc">Note correspondant au taux écologique du site</desc>
          <rect width="74" height="70" rx="35" fill="#004743"/>
          <path d="M28.095 48C27.555 48 27 47.895 26.43 47.685C25.86 47.475 25.38 47.19 24.99 46.83C24.6 46.47 24.405 46.05 24.405 45.57C24.405 45.48 24.42 45.33 24.45 45.12L33.135 16.815C33.345 16.155 33.81 15.66 34.53 15.33C35.28 15 36.075 14.835 36.915 14.835C37.785 14.835 38.58 15 39.3 15.33C40.02 15.66 40.485 16.155 40.695 16.815L49.38 45.12C49.44 45.33 49.47 45.48 49.47 45.57C49.47 46.02 49.26 46.44 48.84 46.83C48.45 47.19 47.97 47.475 47.4 47.685C46.83 47.895 46.275 48 45.735 48C45.255 48 44.835 47.925 44.475 47.775C44.145 47.595 43.92 47.28 43.8 46.83L42.09 40.845H31.74L30.075 46.83C29.955 47.28 29.715 47.595 29.355 47.775C28.995 47.925 28.575 48 28.095 48ZM33 36.255H40.83L36.915 22.44L33 36.255Z" fill="white"/>
          <path d="M24 53.625H49.83V55.875H24V53.625Z" fill="white"/>
        </svg>
      </div>
    </div>
  </div>

  <div class="eco-conception-text">
    <h2> <?= $title ?> </h2>
    <p> <?= $text ?> </p>
  </div>

</section>
