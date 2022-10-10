<div class="flex">
  <h2 class="footer__confiance-titre"><?php the_field('titre546'); ?></h2>
  <br>
  <div id="wrapper">
      <div id="carousel">
          <div id="content">
              <!--{{#each logos}}
                  <img src="{{logo.url}}" alt="{{logo.alt}}" class="item" />
              {{/each}}-->
              <?php if( have_rows('logos') ): ?>
                  <?php while( have_rows('logos') ): the_row();
                      $logo = get_sub_field('logo');
                      ?>
                          <?php echo wp_get_attachment_image( $logo, 'full' ); ?>

                              <img src="<?php the_sub_field('logo'); ?>" class="item" alt="<?php the_sub_field('nom_de_lentreprise'); ?>"/>
                  <?php endwhile; ?>
              <?php endif; ?>
          </div>
      </div>
      <div class="button-carrousel">
        <button id="prev"><svg style="width: 20px; height: 20px;" width="213" height="112" viewBox="0 0 213 112" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 109L106.5 6L209.5 109" stroke="white" stroke-width="15"/></svg></button>
        <button id="next"><svg style="width: 20px; height: 20px;" width="213" height="112" viewBox="0 0 213 112" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 109L106.5 6L209.5 109" stroke="white" stroke-width="15"/></svg></button>
      </div>
  </div>
</div>


<script>
  /*****
  * Carousel footer
  */
  const gap = 16;

  const carousel = document.getElementById("carousel"),
  content = document.getElementById("content"),
  next = document.getElementById("next"),
  prev = document.getElementById("prev");

  next.addEventListener("click", e => {
  carousel.scrollBy(width + gap, 0);
  if (carousel.scrollWidth !== 0) {
      prev.style.display = "flex";
  }
  if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
      next.style.display = "none";
  }
  });
  prev.addEventListener("click", e => {
  carousel.scrollBy(-(width + gap), 0);
  if (carousel.scrollLeft - width - gap <= 0) {
      prev.style.display = "none";
  }
  if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
      next.style.display = "flex";
  }
  });

  let width = carousel.offsetWidth;
  window.addEventListener("resize", e => (width = carousel.offsetWidth));
</script>
