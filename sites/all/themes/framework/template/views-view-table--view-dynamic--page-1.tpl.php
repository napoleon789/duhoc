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
  $view = views_get_current_view();
  $view->set_display('page_1');
  $view->init_handlers();
  $exposed_form = $view->display_handler->get_plugin('exposed_form');
  $data_date = $exposed_form->view->exposed_raw_input;
  $period_title = '';
  $receive = $data_date['field_com_received_date_value']['min'];
  $paid_date = $data_date['field_field_paid_date_value']['min'];
  $due_date = $data_date['field_field_due_date_value']['min'];
  $contract_date = $data_date['field_create_date_value']['min'];

  $receive_max = $data_date['field_com_received_date_value']['max'];
  $paid_date_max = $data_date['field_field_paid_date_value']['max'];
  $due_date_max = $data_date['field_field_due_date_value']['max'];
  $contract_date_max = $data_date['field_create_date_value']['max'];
  if(!empty($receive)) {
    $period_title .= '<b>Com Received Date:</b> '. duhoc_report_convert_date($receive) .' to '. duhoc_report_convert_date($receive_max);
  }
  if(!empty($paid_date)) {
    $period_title .= '<b>Paid date:</b> '. duhoc_report_convert_date($paid_date) .' to '. duhoc_report_convert_date($paid_date_max);
  }
  if(!empty($due_date)) {
    $period_title .= 'Due date: '. duhoc_report_convert_date($due_date) .' to '. duhoc_report_convert_date($due_date_max);
  }
  if(!empty($contract_date)) {
    $period_title .= 'Create Contract date: '. duhoc_report_convert_date($contract_date) .' to '. duhoc_report_convert_date($contract_date_max);
  }

  $header_custom = $view->exposed_data['dynamic-field'];
  $i=0;
  foreach($header_custom as $k =>$value_c) {
    $header_c[$k] = $value_c['label'];
  }
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
<div><strong>Report Name</strong>: <?php echo $view->exposed_raw_input['name-report']?></div>
<?php if(strlen($period_title)) :?>
<div> <?php echo $period_title;?> </div>
<?php endif;?>
<br/>
<table <?php if ($classes) { print 'class="'. $classes . '" '; } ?><?php print $attributes; ?>>
   <?php if (!empty($title) || !empty($caption)) : ?>
     <caption><?php print $caption . $title; ?></caption>
  <?php endif; ?>
  <?php if (!empty($header)) : ?>
    <thead>
      <tr>
        <?php foreach ($header as $field => $label): ?>
          <th <?php if ($header_classes[$field]) { print 'class="'. $header_classes[$field] . '" '; } ?>>
            <?php print $header[$field]; ?>
          </th>
        <?php endforeach; ?>
        <?php for($j =0;$j<=5;$j++):?>
        <?php
          $label_op ='';
          $label_op .= $exposed_form->view->exposed_raw_input['tieude_'.$j];
        ?>
        <?php if(!empty($label_op)) :?>
        <th><?php echo $label_op?></th>

        <?php endif;?>
        <?php endfor;?>
      </tr>
    </thead>
  <?php endif; ?>
  <tbody>
  <?php $m = 0; ?>
    <?php foreach ($rows as $row_count => $row): ?>
      <tr <?php if ($row_classes[$row_count]) { print 'class="' . implode(' ', $row_classes[$row_count]) .'"';  } ?>>
        <?php foreach ($row as $field => $content): ?>
          <td <?php if ($field_classes[$field][$row_count]) { print 'class="'. $field_classes[$field][$row_count] . '" '; } ?><?php print drupal_attributes($field_attributes[$field][$row_count]); ?>>
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
        <?php for($h =0;$h<=5;$h++):?>
        <?php
          $str1 ='';
          $str1 .= $exposed_form->view->exposed_raw_input['toantu_'.$h];
          $str = str_replace('N','$N',$str1);
          ?>
        <?php if(!empty($str1)) :?>
        <?php
        if(!empty($str)) {
        $fields1 = array_keys($fields);
        $count = count($fields1);
        for($i = 0;$i< $count; $i++) {
          $truong = $fields1[$i];
          if(isset($row[$truong]))
            $N[$i] = $row[$truong];
        }
          $m++;
          $total = '$sum = ' . $str . ';' ;
          eval($total);
        }
        else
         $sum = '';
        ?>
        <td><?php echo $sum ?></td>
        <?php endif; ?>
        <?php endfor; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<form action="" method="post">
  <input type="submit" name="submit" value="Export">
</form>