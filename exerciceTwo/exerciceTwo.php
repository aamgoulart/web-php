<?php
  $width = $_GET["width"];
  $height = $_GET['height'];

  $area = $width*$height;

  $capacity = $area/2.25;

  echo "O capacidade é de $capacity";
?>