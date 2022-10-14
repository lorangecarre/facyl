<section class="testimonials" aria-labelledby="<?php the_field('titre852'); ?> - sliders" role="slider">
<h2 class="title-testimonials"><?php the_field('titre852'); ?></h2>
  <ul class="slider">
  <?php $count = count(get_field('temoignages')); ?>
    <?php if( have_rows('temoignages')):?>
        <?php while( have_rows('temoignages') ): the_row();
          $logo = get_sub_field('logo_de_lentreprise'); $i++; ?>
            <?php echo wp_get_attachment_image( $logo, 'full' ); ?>

            <li class="slide" role="group" aria-label="slide <?php echo $i; ?> sur <?php echo $count; ?>">
              <div class="testimonial">
                <img loading="lazy"  src="<?php the_sub_field('logo_de_lentreprise'); ?>" alt="<?php the_sub_field('nom_de_temoin'); ?>"/>
                <svg aria-hidden="true" width="50px" height="50px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"/></svg>
                <blockquote class="testimonial__text">
                  <?php the_sub_field('temoignage'); ?><br>
                  <cite><?php the_sub_field('nom_de_temoin'); ?><cite>
                </blockquote>
                <svg aria-hidden="true" width="50px" height="50px" style="align-self: flex-end;transform: rotate(180deg);" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"/></svg>
              </div>
            </li>
      <?php endwhile; ?>
    <?php endif; ?>
  </ul>
  <div class="btns">
    <button class="slider__btn slider__btn--left" aria-label="passer à gauche"><svg aria-hidden="true" style="width: 20px; height: 20px;transform: rotate(270deg);" width="213" height="112" viewBox="0 0 213 112" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 109L106.5 6L209.5 109" stroke="white" stroke-width="15"/></svg></button>
    <button class="slider__btn slider__btn--right" aria-label="passer à droite"><svg aria-hidden="true" style="width: 20px; height: 20px;transform: rotate(90deg);" width="213" height="112" viewBox="0 0 213 112" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 109L106.5 6L209.5 109" stroke="white" stroke-width="15"/></svg></button>
  </div>
</section>
<script>
  // Slider
  const slider = function () {
    const slides = document.querySelectorAll('.slide');
    const btnLeft = document.querySelector('.slider__btn--left');
    const btnRight = document.querySelector('.slider__btn--right');

    let curSlide = 0;
    const maxSlide = slides.length;

    const goToSlide = function (slide) {
      slides.forEach(
        (s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
      );
    };

    // Next slide
    const nextSlide = function () {
      if (curSlide === maxSlide - 1) {
        curSlide = 0;
      } else {
        curSlide++;
      }

      goToSlide(curSlide);
    };

    const prevSlide = function () {
      if (curSlide === 0) {
        curSlide = maxSlide - 1;
      } else {
        curSlide--;
      }
      goToSlide(curSlide);
    };

    const init = function () {
      goToSlide(0);
    };
    init();

    // Event handlers
    btnRight.addEventListener('click', nextSlide);
    btnLeft.addEventListener('click', prevSlide);

    document.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowLeft') prevSlide();
      e.key === 'ArrowRight' && nextSlide();
    });
  };
  slider();
</script>
