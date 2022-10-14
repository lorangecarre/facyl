<?php
/**
 * Template Name: Archives
 *
 *  @package facyl
 */

get_header(); ?>

<main class="site-main">
  <section class="realisations">
    <h1>  <?php the_title(); ?> </h1>
    <?php
        $categories = get_categories();
    ?>
    <ul class="cat-list">
      <li class="cat-list_article">
        <a class="cat-list_item cat-list_item_handicap active" href="#!" data-slug="">Aucun filtre</a>
      </li>
      <?php foreach ( $categories as $category ) : ?>
      <li class="cat-list_article">
        <a class="cat-list_item cat-list_item_handicap" href="#!" data-slug="<?php echo $category->slug; ?>">
          <?php echo $category->name; ?> (<?php echo $category->count ?>)
        </a>
      </li>
    <?php endforeach; ?>
    </ul>
    <div class="search-query">
        <input type="text" name="search" id="searchbar" class="searchbar" placeholder="Rechercher...">
        <a href="#" class="search-button"><?php include get_theme_file_path( THEME_SETTINGS['chevron_right'] ); ?></a>
    </div>
    <?php
		$projects = new WP_Query([
			'post_type' => 'post',
			'posts_per_page' => -1,
			'order_by' => 'date',
			'order' => 'desc',
		]);

    if ( $projects->have_posts() ) : ?>
        <div class="articles newsPreview">
          <?php while ( $projects->have_posts() ) : $projects->the_post();
              get_template_part( 'template-parts/component/realisations' );
          endwhile; ?>
        </div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
  </section>
</main>

<?php get_footer();
