<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="row">
<?php $i = 1; ?>
<?php foreach ($rows as $id => $row): ?>
  <?php if($i%7 == 0): ?>
      </div>
      <div class="row">
  <?php endif; ?>
  <div<?php if ($classes_array[$id]) { print ' class="col-md-2 ' . $classes_array[$id] .'"';  } ?>>
    <div class="thumbnail card">
        <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
        <?php print $row; ?>
    </div>
  </div>
  <?php $i++; ?>
<?php endforeach; ?>
</div>