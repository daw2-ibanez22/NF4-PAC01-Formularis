<?php
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $numero3 = $_POST['num3'];
    $numero4 = $_POST['num4'];
    $numero5 = $_POST['num5'];

    $suma = $numero1 + $numero2 + $numero3 + $numero4 + $numero5 ;

    echo "La suma de ",$numero1," + ",$numero2," + ",$numero3," + ",$numero4," +  ",$numero5,"  = ",$suma;
?>