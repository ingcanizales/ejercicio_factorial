<?php 



$numero1 = $_POST["txtnumero1"];
$numero2 = $_POST["txtnumero2"];
$numero3 = $_POST["txtnumero3"];


$promedio =($numero1 + $numero2 + $numero3)/3;

echo "<br>el promedio de los numeros es :" .$promedio;

if ($numero1 > $numero2 && $numero1 > $numero3) {
    echo "<br><br><br> El mayor es el número 1, con el valor: " . $numero1;   
}else if ($numero2 > $numero1 && $numero2 > $numero3) {
    echo "<br><br><br> El mayor es el número 2, con el valor: " . $numero2;
}else if ($numero3>$numero1 && $numero3 > $numero2) {
    echo "<br><br><br> El mayor es el número 3, con el valor: " . $numero3;
  
}
else{
    echo  "<br><br><br> No cumple";
}

if ($numero1 < $numero2 && $numero1 < $numero3) {
    echo "<br><br><br> El menor es el número 1, con el valor: " . $numero1;   
}else if ($numero2 < $numero1 && $numero2 < $numero3) {
    echo "<br><br><br> El menor es el número 2, con el valor: " . $numero2;
}else if ($numero3 < $numero1 && $numero3 < $numero2) {
    echo "<br><br><br> El menor es el número 3, con el valor: " . $numero3;
  
}
else{
    echo  " <br><br><br> No cumple";
}


 ?>
 
 


