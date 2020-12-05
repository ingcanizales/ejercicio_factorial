<?php 

if(isset($_POST["btncalcular2"])){

require_once 'operaciones.php';

$numero1 = $_POST["txtnumero1"];
$numero2 = $_POST["txtnumero2"];

$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;

echo "La suma de los valores es : " . $suma;
echo "<br>La suma de los valores es : " . $resta;
echo "<br>La suma de los valores es : " . $multiplicacion;
echo "<br>La suma de los valores es : " . $division;

}else{
    echo "Acceso no autorizado.";
}

?>