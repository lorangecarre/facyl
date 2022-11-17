<?php
/**
 * Etape
 *
 * @package facyl
 */
namespace Facyl;
?>
<?php if( have_rows('etapes') ): ?>
<section class="blocks-etapes">
  <h2><?php the_field( 'titre' ); ?></h2>
  <?php while( have_rows('etapes') ): the_row(); ?>
    <div class="etape">
      <span><?php echo get_row_index(); ?></span>
      <div class="contenu">
        <h3><?php the_sub_field('titre'); ?></h3>

        <?php if( have_rows('bouton') ): ?>
          <?php while( have_rows('bouton') ): the_row(); ?>
              <a class="button-b" href="<?php the_sub_field('lien_bouton'); ?>"><?php the_sub_field('texte_bouton'); ?><?php include get_theme_file_path( THEME_SETTINGS['chevron_right'] ); ?></a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  <?php endwhile; ?>
  <?php if( have_rows('bouton') ): ?>
    <?php while( have_rows('bouton') ): the_row(); ?>
      <a class="button-w" href="<?php the_sub_field('lien_bouton'); ?>"><?php the_sub_field('texte_bouton'); ?><?php include get_theme_file_path( THEME_SETTINGS['chevron_right'] ); ?></a>
    <?php endwhile; ?>
  <?php endif; ?>
  </section>
<?php endif; ?>
