<?php
/**
 * Template Name: Formulaire facyl
 *
 *  @package facyl
 */

get_header(); ?>

<main class="site-main">
  <section class="formulaire-facyl">
   <?php
     if ( function_exists('yoast_breadcrumb') ) {
       yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    }
  ?>
    <h1>  <?php the_title(); ?> </h1>
    <?php the_content(); ?>
  </section>
</main>

<?php get_footer();
