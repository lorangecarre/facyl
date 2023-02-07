<li class="article">
  <?php echo get_the_post_thumbnail( get_the_ID(), 'large', [ 'alt' => '' ] ); ?>
  <div class="article-info">
    <h3><?php echo esc_html( get_the_title() ) ?></h3>
    <p><?php echo esc_html( get_the_excerpt() ) ?></p>
    <a href="<?php echo esc_html( get_the_guid() ) ?>" target="_blank">Lire la suite</a>
  </div>
</li>
