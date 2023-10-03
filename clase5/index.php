<?php
// 1)
$n1 = 1;

while ($n1 <= 9){
    echo "repetición: " . $n1;
    echo "<br>";
    $n1 ++;
}

echo "<br>";
// 2) 
$n2 = 9;
while ($n2 >= 1){
    echo "repetición: " . $n2;
    echo "<br>";
    $n2 --;
}

echo "<br>";

// 3)
for($n3 = 2; $n3 <= 20; $n3 = $n3 + 2){
    echo "repetición: " . $n3;
    echo "<br>";
}

echo "<br>";

// 4)
for($n4 = 1; $n4 <= 20; $n4 = $n4 + 2){
    echo "repetición: " . $n4;
    echo "<br>";
}
echo "<br>";

// 5)
$n5 = 1;
$suma = 0;
while ($n5 <= 20){
    $suma = $suma + $n5; 
    $n5 ++;
}
echo "la suma es: ". $suma;
echo "<br>";

// 6)
$n6 = 2;
$suma1 = 0;
while ($n6 <= 20){
    $suma1 = $suma1 + $n6; 
    $n6 = $n6 + 2;
}
echo "la suma es: ". $suma1;
?> 
