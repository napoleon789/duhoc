<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php
$output = '';
$output .= duhoc_report_type();
$output .= theme('table', array(
  'header' => $header,
  'rows' => $rows,
  'attributes' => array('width' => '100%','class' => array('report_hv'),'border'=>'1')
));
if (isset($_POST['submit'])) {
  duhoc_report_export_to_excel($output);
}
?>
<?php

$view = views_get_view('new_views');
$view->set_display('page_3');
$view->init_handlers();
$exposed_form = $view->display_handler->get_plugin('exposed_form');
print $exposed_form->render_exposed_form(true);

?>

<div id="blanket" style="display:none;"></div>
<div id="popUpDiv" style="display:none;">
  <a href="javascript:void(0)" onclick="popup('popUpDiv')">Click Me To Close</a>
</div>
<h1><a href="javascript:void(0)" onclick="popup('popUpDiv')">Click Here To Open The Pop Up</a></h1>

<table <?php if ($classes) { print 'class="'. $classes . '" '; } ?><?php print $attributes; ?>>
  <?php if (!empty($title) || !empty($caption)) : ?>
    <caption><?php print $caption . $title; ?></caption>
  <?php endif; ?>
  <?php if (!empty($header)) : ?>
    <thead>
    <tr>
      <?php foreach ($header as $field => $label): ?>
        <th <?php if ($header_classes[$field]) { print 'class="'. $header_classes[$field] . '" '; } ?>>
          <?php print $label; ?>
        </th>
      <?php endforeach; ?>
    </tr>
    </thead>
  <?php endif; ?>
  <tbody>
  <?php foreach ($rows as $row_count => $row): ?>

    <tr <?php if ($row_classes[$row_count]) { print 'class="' . implode(' ', $row_classes[$row_count]) .'"';  } ?>>
      <?php foreach ($row as $field => $content): ?>
        <td <?php if ($field_classes[$field][$row_count]) { print 'class="'. $field_classes[$field][$row_count] . '" '; } ?><?php print drupal_attributes($field_attributes[$field][$row_count]); ?>>
          <?php print $content; ?>
        </td>
      <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<form action="" method="post">
  <input type="submit" name="submit" value="Export">
</form>

<style type="text/css">
  <!--
  #blanket {
    background-color:#111;
    opacity: 0.65;
    position:absolute;
    z-index: 9001; /*ooveeerrrr nine thoussaaaannnd*/
    top:0px;
    left:0px;
    width:100%;
  }
  #popUpDiv {
    position:absolute;
    background-color:#eeeeee;
    width:300px;
    height:300px;
    z-index: 9002; /*ooveeerrrr nine thoussaaaannnd*/
  }
  -->
</style>