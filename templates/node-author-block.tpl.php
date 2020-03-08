<?php

/**
 * @file
 * Node author information block - Template file.
 */
?>

<section class="author-template">
  <!-- Print block title -->
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>
  <!-- Block content -->
  <div class="author-block">
    <div class="author-left">
    <?php print render($variables['user_image']); ?>
    </div>
    <div class="author-right">
      <strong class="author-username"><?php print render($variables['username']); ?></strong>
      <p class="author-date"><?php print render($variables['created']); ?></p>
    </div>
  </div>

</section>
