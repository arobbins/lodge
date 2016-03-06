<?php use Roots\Sage\Titles; ?>

<div class="page-header">

  <?php include(locate_template('templates/breadcrumbs.php')); ?>

  <h1><?= Titles\title(); ?></h1>
</div>

<?php if(is_home()) {
  $postsPageID = get_option('page_for_posts');
  $content = get_the_content_by_id($postsPageID);
  print_r($content);
} ?>
