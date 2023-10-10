<?php
//Comprobación de ingreso de nombre 
  if (empty($_GET["nombreAlumno"])){
    echo "No se ha ingresado un nombre";
    echo "<br>";
 }
else {
    if (isset($_GET["nombreAlumno"])){
        echo "el alumno es: " . $_GET ["nombreAlumno"];
     echo "<br>"; 
    } 
}

//Comprobación de ingreso de caracteres numeros y rangos evaluativos. {
if ($_GET["notaAlumno"] != 0 && empty($_GET["notaAlumno"])){
    echo "No hay caracteres ingresados";
    echo "<br>";
 }
else {
 if (!is_numeric($_GET["notaAlumno"])){
    echo "No se ha ingresado un numero";
    echo "<br>";
 }
}
if  ($_GET["notaAlumno"] < 0 || $_GET["notaAlumno"] > 10 && is_numeric($_GET["notaAlumno"])) {
    echo "La nota ingresada esta fuera de los rangos de evaluación.";
    echo "<br>";
}

// Desempeño según nota. 
 if ($_GET ["notaAlumno"] >= 0 && $_GET ["notaAlumno"] <= 2) {
    echo "La nota es: ". $_GET["notaAlumno"]. " y su trabajo es Muy Deficiente";
 }

 if ($_GET ["notaAlumno"] >= 3 && $_GET ["notaAlumno"] <= 5) {
    echo "La nota es: ". $_GET["notaAlumno"]. " y su trabajo es Insuficiente";
 }

 if ($_GET ["notaAlumno"] >= 6 && $_GET ["notaAlumno"] <= 7) {
    echo "La nota es: ". $_GET["notaAlumno"]. " y su trabajo esta Bien";
 }

 if ($_GET ["notaAlumno"] >= 8 && $_GET ["notaAlumno"] <= 9) {
    echo "La nota es: ". $_GET["notaAlumno"]. " y su trabajo es Notable";
 }

 if ($_GET ["notaAlumno"] == 10) {
    echo "La nota es: ". $_GET["notaAlumno"]. " y su trabajo es Sobresaliente";
 }
?>
