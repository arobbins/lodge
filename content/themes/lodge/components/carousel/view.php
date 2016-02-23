<ul class="carousel">
  <?php

    if( have_rows('carousel', $post->ID) ):
      while ( have_rows('carousel', $post->ID) ) : the_row(); ?>
      <li style="background-image:url('<?php the_sub_field('slide_image'); ?>');" class="carousel-slide" alt="<?php the_sub_field('slide_caption'); ?>">
        <figcaption class="carousel-slide-caption">
          <?php the_sub_field('slide_caption'); ?>
        </figcaption>
      </li>
      <?php endwhile;

    else :

    endif;

  ?>
</ul>
