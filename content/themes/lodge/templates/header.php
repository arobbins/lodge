<header class="l-col l-col-center header">
  <a class="logo logo-mark" href="<?= esc_url(home_url('/')); ?>">
    <img src="<?php the_field('theme_logo_mark', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
  </a>

  <div class="header-mobile-icon">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>

  <nav class="menu-primary-wrapper">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'l-col nav nav-main menu menu-primary']);
      endif;
    ?>

    <a href="<?php the_field('theme_menu_link', 'option'); ?>" class="nav-menu"><?php the_field('theme_menu_text', 'option'); ?></a>

  </nav>

  <footer class="header-footer">
    <?php include(locate_template('components/social-icons/view.php')); ?>
  </footer>
</header>

<nav class="menu-primary-wrapper-mobile">
  <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'l-col nav nav-main menu menu-primary']);
    endif;
  ?>
</nav>
