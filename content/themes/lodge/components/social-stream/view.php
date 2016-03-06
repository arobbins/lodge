<?php

  $pages = get_field('theme_social_stream', 'option');
  $currentId = get_the_ID();

  foreach($pages as $key => $value) {
    if($currentId === $value) {
      echo do_shortcode('[ff id="1"]');
    }
  }

?>
