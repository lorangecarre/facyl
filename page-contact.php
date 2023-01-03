<?php
/**
 * Template Name: Contact
 *
 *  @package facyl
 */

get_header(); ?>

<main class="site-main">
  <section class="contact">
    <h1>  <?php the_title(); ?> </h1>
    <?php the_content(); ?>
  </section>
</main>

<?php get_footer();
