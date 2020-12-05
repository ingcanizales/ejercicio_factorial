<?php 
$numero1 = $_POST["txtnumero1"];
$numero2 = $_POST["txtnumero2"];

//Operadores aritméticos
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;

echo "La suma de los valores es : " . $suma;
echo "<br>La suma de los valores es : " . $resta;
echo "<br>La suma de los valores es : " . $multiplicacion;
echo "<br>La suma de los valores es : " . $division;



?>