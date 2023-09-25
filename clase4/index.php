<?php
//Declaración de Variables
$n = 7;
$n2 = 4; 
$n3 = 9;
$numero1 = 11; 
$numero2 = 7;

//1)
if ($n > 0){
  echo " El Número ingresado es un número positivo <br>";
}

//2)

if($n2 > 1 && $n2 < 10){
    echo "El número ingresado es mayor a 1 y menor a 10 <br>";
}

//3)

if($n3 >= 10 || $n3 < 2 ){
    echo "El número ingresado es mayor o igual a 10 o menor a 2 <br>";
}
else { 
    echo "El número ingresado no pudo ser validado <br>";
}

//4)

if($numero1 > $numero2){
    echo $numero1 + $numero2; 
    echo "<br>";
    echo $numero1 - $numero2; 
}
else {
    echo $numero1 * $numero2; 
    echo "<br>"; 
    echo $numero1 / $numero2; 
    echo "<br>"; 
    echo $numero1 % $numero2; 
    echo "<br>"; 
}

if ($numero1 == $numero2){
    echo "Los números ingresados son iguales";
}
?>
