<?php

  if(is_home() || is_single() || is_archive()) {
    if(function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<p id="breadcrumbs">','</p>');
    }
  }

?>
