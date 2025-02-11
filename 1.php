<div class="swiper-wrapper">
  <?php
                global $post;

                $myposts = get_posts([
                  'numberposts' => -1,
                  'offset'      => 1,
                  'category'    => 1
                ]);

                if( $myposts ){
                  foreach( $myposts as $post ){
                    setup_postdata( $post );
                ?>
  <div class="swiper-slide slider__slide">
    <div class="txts">
      <h3>
        <?php the_title(); ?>
      </h3>
      <p>
        <?php the_field(); ?>
      </p>
    </div>
    <div class="slider__image">
      <div class="slider__border1"></div>
      <div class="slider__border2"></div>
      <div class="slider__border3"></div>
      <div class="slider__border4"></div>
      <div class="slider__turget">
        <?php the_post_thumbnail(
                        array(290,576),
                        array()); 
                      ?>
      </div>
    </div>
    <p>
      <?php the_field(); ?>
    </p>
  </div>
  <?php }} wp_reset_postdata(); // Сбрасываем $post
                ?>