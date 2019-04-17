<?php
$cam1 = $_GET['cam'];
echo $cam1;


if($cam1 == "on") {
  $file = fopen("cam.json", "w") or die("can't open file");
  fwrite($file, '{"cam": "on"}');
  fclose($file);
} 
else if ($cam1 == "off") {
  $file = fopen("cam.json", "w") or die("can't open file");
  fwrite($file, '{"cam": "off"}');
  fclose($file);
}

else
{
$file = fopen("cam.json", "w") or die("can't open file");
  fwrite($file, '{"cam": "000"}');
  fclose($file);
}

?>