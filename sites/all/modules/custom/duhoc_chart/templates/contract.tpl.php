<?php
    $a = arg(0);
    $b = arg(1);
    $c = arg(2);
?>
<?php  print drupal_render_children($form); ?>
<?php if($a == 'node' && $b == 'add'):?>

<?php endif;?>
<?php if($a == 'node' && $c == 'hocvien'):?>
<?php  print drupal_render_children($form); ?>
<?php endif;?>

<?php if($a =='hocvien' && $c =='pathway'):?>
  <?php print render($country)?>
  <?php print render($buttons)?>
<?php endif;?>
