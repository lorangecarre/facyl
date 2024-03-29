<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-02-08 17:03:18
 *
 * @package facyl
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace Air_Light;

the_post();

get_header(); ?>

<main class="site-main">
   <?php
     if ( function_exists('yoast_breadcrumb') ) {
       yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    }
  ?>
  <h1>  <?php the_title(); ?> </h1>
  <?php
    the_content();
  ?>
</main>

<?php get_footer();
