<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2021-01-12 15:13:28
 *
 * @package facyl
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

namespace Air_Light;

get_header(); ?>

<main class="site-main">

  <section class="block block-error-404">
    <div class="container">
      <div class="content">

        <h1 id="content">404 <span class="screen-reader-text">Page non trouvée.</span></h1>
        <h2 aria-hidden="true">Page non trouvée.</h2>
        <p>La raison peut être une erreur de frappe ou une URL expirée.</p>

      </div>
    </div>
  </section>

</main>

<?php

// Enable visible footer if fits project:
// get_footer();

// WordPress scripts and hooks
wp_footer();
