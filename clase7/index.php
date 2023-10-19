<?php

//1)-

$array1 = [0,2,4,6,8,10];
$c= 0; 

while  ($c >= 0) {
    echo $array1[$c];
     echo "<br>";
     $c ++;
    if ($c == 5){
     echo $array1[$c];
     echo "<br>";
     break;
    }
}

//2)-

$array2 = ["Pedro","Ana",34,1];
print_r ($array2);

echo "<br>";

//3)-

$array3 = [
    "Nombre:" => "Pedro",
    "Apellido:" => "Torres", 
    "Dirección:" => "Av.Mayo3703",
    "Teléfono:" => "1122334455"
];
print_r ($array3);

echo "<br>";

//4) 

$array4 = ["Madrid", "Barcelona", "Londres", "New
York", "Los Ángeles", "Chicago"];

foreach ($array4 as $clave => $valor ){
     echo "La ciudad con el índice ". $clave. " tiene el nombre ". $valor."<br>"; 
}
;

//5) 

$array5 = [ 
    "MD" => "Madrid",
    "BCL" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Angeles",
    "CCG" => "Chicago"
];

foreach ($array5 as $clave => $valor ){
    echo "El indice de ". $valor. " es ". $clave."<br>"; 
}


?>
