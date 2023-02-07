<?php
/**
 * Template Name: Archives
 *
 *  @package facyl
 */

get_header(); ?>

<main class="site-main">
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      document.getElementById("searchArchives").addEventListener("submit", function(e) {
        e.preventDefault() // Cancel the default action
        sendContactForm();
      });
    });
      </script>
  <section class="realisations">
  <?php
    if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    }
  ?>
    <h1>  <?php the_title(); ?> </h1>
    <h2><span class="sr-only">Vous pouvez trier nos réalisations en utilisant les filtres ou en faisant une recherche</span></h2>
    <?php
        $categories = get_categories();
    ?>
    <ul class="cat-list">
      <li class="cat-list_article">
        <button class="cat-list_item cat-list_item_handicap active" href="#!" data-slug="">Aucun filtre</button>
      </li>
      <?php foreach ( $categories as $category ) : ?>
      <li class="cat-list_article">
        <button class="cat-list_item cat-list_item_handicap" href="#!" data-slug="<?php echo $category->slug; ?>">
          <?php echo $category->name; ?> (<?php echo $category->count ?>)
        </button>
      </li>
    <?php endforeach; ?>
    </ul>
    <form action="" method="get" class="search-query" id="searchArchives">
      <label for="searchbar" class="sr-only">Rechercher à l'aide de mots clés</label>
      <input type="text" name="search" id="searchbar" class="searchbar" placeholder="Rechercher..." required>
      <input type="submit" href="#" class="search-button" value=">">
    </form>
    <?php
		$projects = new WP_Query([
			'post_type' => 'post',
			'posts_per_page' => -1,
			'order_by' => 'date',
			'order' => 'desc',
		]);

    if ( $projects->have_posts() ) : ?>
        <ul class="articles newsPreview">
          <?php while ( $projects->have_posts() ) : $projects->the_post();
              get_template_part( 'template-parts/component/realisations' );
          endwhile; ?>
        </ul>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
  </section>
</main>

<?php get_footer();
