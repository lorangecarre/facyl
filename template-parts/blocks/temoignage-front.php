<section class="testimonials" aria-label="<?php the_field( 'titre852' ); ?>" aria-roledescription="carousel">
<h2 class="title-testimonials"><?php the_field( 'titre852' ); ?></h2>
  <ul class="slider">
  <?php $count = count( get_field( 'temoignages' ) ); ?>
    <?php if ( have_rows( 'temoignages' ) ) : ?>
        <?php while ( have_rows( 'temoignages' ) ) : the_row();
          $logo = get_sub_field( 'logo_de_lentreprise' ); $i++; ?>
            <?php echo wp_get_attachment_image( $logo, 'full' ); ?>

            <li class="slide">
              <div class="testimonial" role="group" aria-label="<?php echo $i; ?> sur <?php echo $count; ?>" aria-roledescription="slide">
                <img loading="lazy"  src="<?php the_sub_field( 'logo_de_lentreprise' ); ?>" alt="<?php the_sub_field( 'nom_de_temoin' ); ?>"/>
                <svg role="presentation" aria-hidden="true" width="50px" height="50px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"/></svg>
                <blockquote class="testimonial__text">
                  <?php the_sub_field( 'temoignage' ); ?><br>
                  <cite><?php the_sub_field( 'nom_de_temoin' ); ?><cite>
                </blockquote>
                <svg role="presentation" aria-hidden="true" width="50px" height="50px" style="align-self: flex-end;transform: rotate(180deg);" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"/></svg>
              </div>
            </li>
      <?php endwhile; ?>
    <?php endif; ?>
  </ul>
  <a href="<?php the_field( 'lien_bouton' ); ?>" class="button-w"><?php the_field( 'texte_bouton' ); ?><?php include get_theme_file_path( THEME_SETTINGS['chevron_right'] ); ?></a>
</section>
