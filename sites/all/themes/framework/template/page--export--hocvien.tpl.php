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
  $nid = arg(2);
  $item = arg(3);
  $cid = arg(4);
  $raw_node = node_load($nid);
  $node = entity_metadata_wrapper('node', $raw_node);
  $raw_collection = $node->field_student_contract[$item]->value();
  //PARTY B INFO
  $name_b = $raw_collection->field_signer_name['und'][$item]['value'];
  $address_b = $raw_collection->field_adress['und'][$item]['value'];
  $phone_b = $raw_collection->field_phone['und'][$item]['value'];

  //info_student
  $name_a = $raw_collection->field_student_full_name['und'][$item]['value'];
  $address_a = $raw_collection->field_student_address['und'][$item]['value'];

  //content to print
  if(isset($cid))
    $contractID  = $cid;
   else
    $contractID = $raw_collection ->field_select_list_contract['und'][$item]['value'];
  $nodect = node_load($contractID);
  $old = array('[name_b]','[address_b]','[phone_b]','[name_a]','[address_a]');
  $new = array($name_b,$address_b,$phone_b,$name_a,$address_a);
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
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Contract.doc");
?>