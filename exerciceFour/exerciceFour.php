<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if ($a + $b >= $c && $a + $c >= $b && $b + $c >= $a) {
    if ($a == $b && $b == $c && $c == $a){
        echo "Triangulo Equilatero";
        } elseif ($a == $b || $b == $c || $c == $a){
        echo "Triangulo Isosceles";
        } elseif ($a != $b && $b != $c && $c != $a){
        echo "Triangulo Escaleno";
        }
    } else {
        echo "Valores invalidos para formar um triangulo";
    }
?>