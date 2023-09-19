<?php 

 echo"Hola mundo";

 //Variable para cadena de caracteres
 echo"<br>";
 $vartxt = "Hola mundo";
 echo"<br>";
 var_dump($vartxt);
 echo"<br>";
 //Variable para operaciones aritmeticas
 $num1 = 12;  
 echo"<br>";
 $num2 = 4;
 echo"<br>";
 echo "numero 1 es 12";
 echo"<br>";
 echo "numero 2 es 4";
 echo"<br>";
 //Suma
 echo "Suma es igual a ";
 echo $num1 + $num2;
 echo"<br>";
//Resta
echo "resta es igual a ";
echo $num1 - $num2;

echo"<br>";
//Multiplicación
echo "Multiplicación es igual a ";
echo $num1 * $num2;

echo"<br>";
//División
echo "División es igual a ";
echo $num1 / $num2;

echo"<br>";
//Resto
echo "Resto es igual a ";
echo $num1 % $num2;

echo"<br>";
//conversión de grados Celsius a Farenheit
$numc = 20;
$conv1 = 9;
$conv2 = 5; 
$conv3= 32;

//Operación para convertir 
echo "el proporcional de ";
echo $numc;
echo " grados celsius";
echo"<br>";
echo "en grados farenhit es igual a ";
echo $numc * $conv1 / $conv2 + $conv3;

echo "<br>";

//Calcular Perimetro y area de un rectangulo
$ba1 = 18;
$al1 = 12;
$mul = 2;

echo "el Area del rectangulo es de ";
echo $ba1 * $al1;
echo "<br>";
echo "el Perimetro del rectangulo es de ";
echo $ba1 * $mul + $al1 * $mul;   

//Calcular Perimetro y area de un Circulo//
$rad = 30;
$pi = 3.14;

echo "<br>";
//Area 
echo "el area del Circulo es de ";
echo $pi * $rad * $rad; 
echo "<br>";
//Perimetro 
echo "el Perimetro del Circulo es de ";
echo $mul * $pi * $rad;
?>
