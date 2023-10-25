<?php

// 1)a) 

function calcuadrado($valor){
    echo "el area del cuadrado es: " . $valor * $valor;
    echo "<br>";
    echo "el perimetro del cuadrado es: " . $valor + $valor + $valor + $valor;
    echo "<br>";
}
calcuadrado(12);
calcuadrado(16);
calcuadrado(77);

// b) 

$min = "esto esta en minusculas";

function mayus($take){
  echo strtoupper($take);
  echo "<br>";
}

mayus($min);

$max = "ESTO ESTA EN MAYUSCULAS";

function minus($take){
  echo strtolower($take);
  echo "<br>";
}

minus($max);

// c) 

function calcumes($mes){
    $dias = 0; 
    if ($mes >= 1 || $mes <= 12){
    switch ($mes) {
    case 1: 
        $dias = 31;
        break;
    case 2: 
        $dias = 28;
        break;
    case 3:
        $dias = 31;
        break;
    case 4: 
        $dias = 30; 
        break;
    case 5: 
        $dias = 31;
        break;
    case 6:
        $dias = 30;
        break;
    case 7: 
        $dias = 31;
        break;
    case 8: 
        $dias = 31;
        break;
    case 9:
        $dias = 30;
        break;
    case 10: 
        $dias = 31; 
        break;
    case 11: 
        $dias = 30;
        break;
    case 12:
        $dias = 31;        
        break; 
    }
}
return "el mes: " .$mes. " tiene: ".$dias. " dias";
}

$mes1 = calcumes(1);
echo $mes1;
echo "<br>";
$mes2 = calcumes(2);
echo $mes2;
echo "<br>";
$mes3 = calcumes(9);
echo $mes3;
echo "<br>";

?>
