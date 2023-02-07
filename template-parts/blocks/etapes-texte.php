<?php
/**
 * Etape
 *
 * @package facyl
 */

namespace Facyl;

if ( have_rows( 'etapes' ) ) : ?>
<ul class="blocks-etapes block-etapes-texte">
  <?php while ( have_rows( 'etapes' ) ) : the_row(); ?>
    <li class="etape-texte">
      <span class="text-span-etape"><?php echo get_row_index(); ?></span>
      <div class="contenu">
        <h2><?php the_sub_field( 'titre' ); ?></h2>
        <?php the_sub_field( 'description' ); ?>

        <?php if ( have_rows( 'bouton' ) ) : ?>
          <?php while ( have_rows( 'bouton' ) ) : the_row(); ?>
              <a class="button-b" href="<?php the_sub_field( 'lien_bouton' ); ?>"><?php the_sub_field( 'texte_bouton' ); ?><?php include get_theme_file_path( THEME_SETTINGS['chevron_right'] ); ?></a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </li>
  <?php endwhile; ?>
</ul>
<?php endif; ?>
