<ul class="carousel">
  <?php

    if (is_home()) {
      $id = get_option('page_for_posts');
    } else {
      $id = $post->ID;
    }

    if(have_rows('carousel', $id)):
      while ( have_rows('carousel', $id)) : the_row(); ?>
      <li style="background-image:url('<?php the_sub_field('slide_image'); ?>');" class="carousel-slide">
        <figcaption class="carousel-slide-caption">
          <?php the_sub_field('slide_caption'); ?>
        </figcaption>
      </li>
      <?php endwhile;

    else :

      if(have_rows('theme_default_carousel', 'option')):
        while(have_rows('theme_default_carousel', 'option')) : the_row(); ?>
          <li style="background-image:url('<?php the_sub_field('theme_default_carousel_slide_image'); ?>');" class="carousel-slide">
            <figcaption class="carousel-slide-caption">
              <?php the_sub_field('theme_default_carousel_slide_caption'); ?>
            </figcaption>
          </li>
        <?php endwhile;

      else :

      endif;

    endif;

  ?>
</ul>
