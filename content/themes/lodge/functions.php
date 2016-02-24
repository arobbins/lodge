<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


//
// Get content by ID
//
function get_the_content_by_id($post_id) {
  $page_data = get_page($post_id);
  if ($page_data) {
    return $page_data->post_content;
  }
  else return false;
}


//
// Moving Gravity Forms scripts to Footer
//
function init_scripts() {
  return true;
}

add_filter("gform_init_scripts_footer", "init_scripts");


//
// Hours shortcode
//
function hours($atts) {
  ob_start();
  include(locate_template('components/hours/view.php'));
  $content = ob_get_clean();
  return $content;
}
add_shortcode('hours', 'hours');


//
// Maps shortcode
//
function map($atts) {
  ob_start();
  include(locate_template('components/map/view.php'));
  $content = ob_get_clean();
  return $content;
}
add_shortcode('map', 'map');
