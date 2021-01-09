<?php
  $kilometers = $_GET["kilometers"];
  $liters = $_GET['liters'];

  $consumer = $kilometers/$liters;

  echo "O consumo é de $consumer";
?>