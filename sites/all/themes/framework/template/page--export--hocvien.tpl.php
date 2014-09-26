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
<?php
  $name = $page['content']['system_main']['title'];
  $node = node_load(31);

  $old = array('hoten');
  $new = array($name);
  $contract = $node->body['und'][0]['value'];
  $ndung = str_replace($old,$new,$contract);
?>

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
header("Content-Disposition: attachment;Filename=HelloWorld.doc");
?>
