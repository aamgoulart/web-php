<?php
  $baseLarge = $_GET["baseLarge"];
  $height = $_GET['height'];
  $baseMinor = $_GET['minor'];

  $area = (($baseLarge+$baseMinor)*$height)/2;

  $heightPyramid = $GET_["heughtPyramid"];

  $baseArea = $GET_["baseArea"];

  $volume = $heightPyramid*$baseArea/3;

  echo "A área do trapezio é $area\t";


  echo "O volume da pirâmide é $volume";
?>