<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class('l-col'); ?>>

    <div class="l-row l-fill wrapper" role="document">

      <div class="header-wrapper">
        <?php
          do_action('get_header');
          get_template_part('templates/header');
        ?>
      </div>

      <main class="main">
        <?php include Wrapper\template_path(); ?>
      </main>

      <?php if (Setup\display_sidebar()) : ?>
        <aside class="sidebar">
          <?php include Wrapper\sidebar_path(); ?>
        </aside>
      <?php endif; ?>

    </div>

    <?php
      do_action('get_footer');

      include(locate_template('components/carousel/view.php'));

      include(locate_template('components/social-stream/view.php'));

      get_template_part('templates/footer');

      wp_footer();
    ?>

  </body>
</html>
