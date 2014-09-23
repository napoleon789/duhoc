<?php
  $a = arg(0);
  $b = arg(1);
  $c = arg(2);
?>
<?php if($b == 'setting'):?>
<?php print render($country)?>
<?php print render($buttons)?>

<?php else :?>
  <?php echo render($title)?>
<?php  print drupal_render_children($form)?>
<?php endif;?>