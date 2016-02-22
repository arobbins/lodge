<?php

  if( have_rows('theme_social', 'option') ):
    while ( have_rows('theme_social', 'option') ) : the_row(); ?>

      <a href="<?php the_sub_field('social_link'); ?>" class="social-link">
        <img src="<?php the_sub_field('social_icon'); ?>" alt="<?php the_sub_field('social_site'); ?>" class="social-link-image">
      </a>

    <?php endwhile;

  else :

  endif;

?>
