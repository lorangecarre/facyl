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
    <ul class="tarifs__plans" role="list">
    <?php while ( have_rows( 'plans' ) ) : the_row(); ?>
      <li class="plan" role="listitem">
        <header class="plan__header">
          <h3 class="plan__title"><?php echo esc_html( $parent_title = get_sub_field( 'plan_title' ) ); ?></h3>
          <p class="plan__price"><?php echo esc_html( $parent_price = get_sub_field( 'plan_price' ) ); ?></p>
        </header>
        <?php if ( have_rows( 'plan_prestations' ) ) : ?>
        <ul class="plan__prestations" role="list">
        <?php while ( have_rows( 'plan_prestations' ) ) : the_row(); ?>
          <li class="plan__prestation" role="listitem">
            <svg class="checkmark" version="1.1" viewBox="0 0 16 16" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
            <g fill="var(--color-primary)" transform="matrix(.046715 0 0 .046714 -.00014015 0)">
              <path d="m171.25 0c-94.417 0-171.25 76.819-171.25 171.25 0 94.428 76.829 171.26 171.25 171.26 94.438 0 171.25-76.826 171.25-171.26 0-94.429-76.808-171.25-171.25-171.25zm74.117 136.16-89.69 89.69c-2.693 2.69-6.242 4.048-9.758 4.048-3.543 0-7.059-1.357-9.761-4.048l-39.007-39.007c-5.393-5.398-5.393-14.129 0-19.521 5.392-5.392 14.123-5.392 19.516 0l29.252 29.262 79.944-79.948c5.381-5.386 14.111-5.386 19.504 0 5.393 5.401 5.393 14.132 0 19.524z"/>
            </g>
            </svg>
            <?php echo esc_html( $prestation = get_sub_field( 'plan_prestation_description' ) ); ?></li>
        <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        <?php if ( get_sub_field( 'plan_buttonLink' ) !== '' || get_sub_field( 'plan_mail' ) !== '' || get_sub_field( 'plan_phone' ) !== '' ) : ?>
        <footer class="plan__footer" >
          <?php if ( have_rows( 'plan_buttonLink' ) !== '' ) : ?>
          <a class="plan__button" href="<?php echo esc_html( $parent_btn_texte = get_sub_field( 'plan_buttonLink' ) ); ?>">
            <?php echo esc_html( $parent_btn_texte = get_sub_field( 'plan_buttonText' ) ); ?> <?php include get_theme_file_path( THEME_SETTINGS['chevron_right'] ); ?>
          </a>
          <?php endif; ?>
          <?php if ( get_sub_field( 'plan_mail' ) !== '' ) : ?>
            <a class="plan__mail" href="mailto:<?php echo esc_html( $parent_mail = get_sub_field( 'plan_mail' ) ); ?>">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="-49 141 512 512" style="enable-background:new -49 141 512 512;" xml:space="preserve" class="mail" aria-hidden="true" focusable="false">
              <path fill="var(--color-primary)" d="M458.49,242.721L303.211,397L458.49,551.279c2.807-5.867,4.51-12.353,4.51-19.279V262
                C463,255.073,461.297,248.588,458.49,242.721z"/>
              <path fill="var(--color-primary)" d="M238.816,418.973L437.279,221.51C431.412,218.703,424.927,217,418,217H-4c-6.927,0-13.412,1.703-19.279,4.51
                l198.463,197.463C192.732,436.521,221.268,436.521,238.816,418.973z"/>
              <path fill="var(--color-primary)" d="M-44.49,242.721C-47.297,248.588-49,255.073-49,262v270c0,6.927,1.703,13.413,4.51,19.279L110.789,397L-44.49,242.721z"/>
              <path fill="var(--color-primary)" d="M260.027,440.184c-29.239,29.239-76.816,29.239-106.055,0L132,418.211L-23.279,572.49C-17.412,575.297-10.927,577-4,577h422
                c6.927,0,13.412-1.703,19.279-4.51L282,418.211L260.027,440.184z"/>
              </svg>
              <?php echo esc_html( $parent_mail = get_sub_field( 'plan_mail' ) ); ?>
            </a>
          <?php endif; ?>
          <?php if ( get_sub_field( 'plan_phone' ) !== '' ) : ?>
            <a class="plan__phone" href="tel:<?php echo esc_html( $parent_phone = get_sub_field( 'plan_phone' ) ); ?>">
              <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="-54 -54 390.5 390.5" style="enable-background:new -54 -54 390.5 390.5;" xml:space="preserve" class="phone" aria-hidden="true" focusable="false">
              <path fill="var(--color-primary)" d="M241.3,204.3
                c-12.6-12.4-28.2-12.4-40.7,0c-9.5,9.4-19,18.9-28.4,28.5c-2.6,2.6-4.7,3.2-7.8,1.4c-6.2-3.4-12.7-6.1-18.6-9.8
                c-27.6-17.4-50.7-39.7-71.2-64.8c-10.2-12.5-19.2-25.8-25.5-40.9c-1.3-3-1-5,1.4-7.5c9.5-9.2,18.8-18.6,28.2-28.1
                c13-13.1,13-28.5-0.1-41.7C71,34,63.6,26.6,56.2,19.1c-7.7-7.7-15.3-15.4-23-23C20.6-16.2,4.9-16.2-7.6-3.9
                c-9.6,9.4-18.8,19.1-28.6,28.4c-9,8.6-13.6,19-14.6,31.3c-1.5,19.9,3.4,38.7,10.2,57C-26.4,150.8-5,184.5,21,215.3
                c35.1,41.8,77,74.8,126.1,98.6c22.1,10.7,45,19,69.8,20.3c17.1,1,32-3.4,43.9-16.7c8.2-9.1,17.4-17.4,26-26.2
                c12.8-13,12.9-28.6,0.2-41.4C271.8,234.7,256.6,219.5,241.3,204.3L241.3,204.3z M241.3,204.3"/>
              </svg>
              <?php echo esc_html( $parent_phone = chunk_split( trim( get_sub_field( 'plan_phone' ) ), 2, ' ' ) ); ?>
            </a>
          <?php endif; ?>
        </footer>
        <?php endif; ?>
        <button id="plan__buttonOpen" class="plan__buttonOpen" aria-controls="sect<?php echo get_row_index(); ?>" aria-expanded="false"><?php include get_theme_file_path( THEME_SETTINGS['chevron_up'] ); ?></button>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>
</section>
