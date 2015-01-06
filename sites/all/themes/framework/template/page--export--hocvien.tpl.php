<html  xmlns:o='urn:schemas-microsoft-com:office:office'
       xmlns:w='urn:schemas-microsoft-com:office:word'
       xmlns='http://www.w3.org/TR/REC-html40'>
<head>
  <title>Generate a document Word</title>
  <!--[if gte mso 9]-->
  <xml>
    <w:WordDocument>
      <w:View>Print</w:View>
      <w:Zoom>80</w:Zoom>
      <w:DoNotOptimizeForBrowser/>
    </w:WordDocument>
  </xml>
  <!-- [endif]-->
  <style>
    p.MsoFooter, li.MsoFooter, div.MsoFooter{
      margin: 0cm;
      margin-bottom: 0001pt;
      mso-pagination:widow-orphan;
      font-size: 12.0 pt;
      text-align: right;
    }


    @page Section1{
      size: 29.7cm 21cm;
      margin: 2cm 2cm 2cm 2cm;
      mso-page-orientation: landscape;
      mso-footer:f1;
    }
    #main-content {display: none;}
    div.Section1 { page:Section1;}
  </style>
</head>
<body>
<pre>
<?php
  $name = $page['content']['system_main']['title'];
  $node = node_load(arg(2));
  $items_contract = field_get_items('node', $node, 'field_student_contract');
  foreach ($items_contract as $item2) {
    $fc2 = field_collection_field_get_entity($item2);
    $address2 = $fc2->field_adress['und'][0]['value'];
    $phone2 = $fc2 ->field_phone['und'][0]['value'];
    $name2 = $fc2 ->field_signer_name['und'][0]['value'];
  }
  $items_basic = field_get_items('node', $node, 'field_student_basic');
  foreach ($items_basic as $item1) {
    $fc1 = field_collection_field_get_entity($item1);
    $date = $fc1->field_student_birth['und'][0]['value'];
    $date = date('d/m/Y',$date);
    $address = $fc1->field_student_address['und'][0]['value'];
    $phone = $fc1 ->field_student_phone['und'][0]['value'];
  }
  $m = arg(3);
  if(isset($m))
    $contractID = $m;
  else
  $contractID = $node ->field_select_contract['und'][0]['value'];
  $nodect = node_load($contractID);
  $old = array('hoten','date','diachi','dienthoai','hvaten_b','dchi_b','phone_b');
  $new = array($name,$date,$address,$phone,$name2,$address2,$phone2);
  $contract = $nodect->body['und'][0]['value'];

  $ndung = str_replace($old,$new,$contract);
?>
</pre>
<div class="Section1">
  <?php echo $ndung;?>
  <br clear=all style='mso-special-character:line-break;page-break-after:always' />
  <div style='mso-element:footer' id="f1">
    <p class=MsoFooter>
      Page <span style='mso-field-code:" PAGE "'></span>
    </p>
  </div>
</body>
</html>

<?php
/*header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Contract.doc");
*/?>