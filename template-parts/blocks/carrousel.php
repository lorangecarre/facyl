<section class="content__flex" aria-label="<?php the_field('titre546'); ?>" aria-roledescription="carousel">
  <h2 class="footer__confiance-titre"><?php the_field('titre546'); ?></h2>
  <div class="carousel">
      <div id="carousel" class="carousel__content" >
          <ul class="carousel__content--child">
          <?php $count = count(get_field('logos')); ?>
              <?php if( have_rows('logos') ):  ?>
                  <?php while( have_rows('logos') ): the_row();
                      $logo = get_sub_field('logo'); $i++; ?>
                        <li>
                          <?php echo wp_get_attachment_image( $logo, 'full' ); ?>
                            <img role="group" aria-label="<?php echo $i; ?> sur <?php echo $count; ?>" aria-roledescription="slide" id="content" src="<?php the_sub_field('logo'); ?>" class="carousel__content--img" alt="<?php the_sub_field('nom_de_lentreprise'); ?>"/>
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
