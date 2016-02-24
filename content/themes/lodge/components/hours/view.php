<?php

  if( have_rows('theme_hours', 'option') ): ?>
    <ul class="l-row hours-list">
      <?php while ( have_rows('theme_hours', 'option') ) : the_row(); ?>
        <li class="l-row hours-list-item">
          <p class="l-box-2 hours-day"><?php the_sub_field('day'); ?></p>
          <p class="l-fill hours-time"><?php the_sub_field('hours'); ?></p>
        </li>
        <?php endwhile;
    else : ?>
    </ul>

  <?php endif;

?>
