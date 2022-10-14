<section class="content__flex" aria-labelledby="<?php the_field('titre546'); ?> - carrousel" role="slider">
  <h2 class="footer__confiance-titre"><?php the_field('titre546'); ?></h2>
  <br>
  <div class="carousel">
      <div id="carousel" class="carousel__content">
          <ul class="carousel__content--child">
          <?php $count = count(get_field('logos')); ?>
              <?php if( have_rows('logos') ):  ?>
                  <?php while( have_rows('logos') ): the_row();
                      $logo = get_sub_field('logo'); $i++; ?>
                        <li role="group" aria-label="slide <?php echo $i; ?> sur <?php echo $count; ?>">
                          <?php echo wp_get_attachment_image( $logo, 'full' ); ?>
                            <img src="<?php the_sub_field('logo'); ?>" class="carousel__content--img" alt="<?php the_sub_field('nom_de_lentreprise'); ?>"/>
                        </li>
                  <?php endwhile; ?>
              <?php endif; ?>
              </ul>
      </div>
      <div class="carousel__button">
        <button id="prev" aria-label="passer à gauche"><svg aria-hidden="true" style="width: 20px; height: 20px;" width="213" height="112" viewBox="0 0 213 112" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 109L106.5 6L209.5 109" stroke="white" stroke-width="15"/></svg></button>
        <button id="next" aria-label="passer à droite"><svg aria-hidden="true" style="width: 20px; height: 20px;" width="213" height="112" viewBox="0 0 213 112" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 109L106.5 6L209.5 109" stroke="white" stroke-width="15"/></svg></button>
      </div>
  </div>
</section>


<script>
  //Carousel footer

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
