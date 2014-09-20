<?php print render($title)?>
<?php print render($image)?>
<?php print render($header)?>
<?php print render($basic)?>
<?php print render($buttons)?>
<div style="display: none">
  <?php print drupal_render_children($form);?>
</div>