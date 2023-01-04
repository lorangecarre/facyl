<?php
/**
 * Template Name: Devis
 *
 *  @package facyl
 */

get_header(); ?>

<main class="site-main">
  <section class="devis">
    <h1>  <?php the_title(); ?> </h1>
    <?php the_content(); ?>
    <div class="devis__estimation">
      <p>Estimation de votre site:</p>
      <p class="devis__estimation_value" data-valeur="600.00"></p>
    </div>
  </section>
</main>

<?php get_footer();
