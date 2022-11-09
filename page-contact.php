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
    <?php echo do_shortcode( '[contact-form-7 id="97" title="Contact"]' ) ?>
  </section>
</main>

<?php get_footer();
