<?php
$dir="images/";
$images = glob($dir."*.jpg");
foreach ($images as $image) {
  echo "<img src=\"".$image."\">";
echo "<br>";echo "<br>";
}
?>