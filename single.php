<?php
/**
 * The template for displaying all single posts
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-09-07 11:57:39
 *
 * @package facyl
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

namespace Air_Light;

the_post();
get_header(); ?>

<main class="site-main">

  <section class="block block-single">
    <article class="article-content">

      <h1><?php the_title(); ?></h1>

      <?php the_content();

      // Required by WordPress Theme Check, feel free to remove as it's rarely used in starter themes
      wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'facyl' ), 'after' => '</div>' ) );

      entry_footer();

      the_post_navigation();

  		// If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      } ?>

    </article>
  </section>

</main>

<?php get_footer();
