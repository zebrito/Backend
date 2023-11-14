<?php

$conexion = mysqli_connect("localhost:3306","root","","bdd_ngm");

$id = (int)$_GET["id"];
$query = "DELETE FROM eventos WHERE evento_nro = $id";
$resultado = mysqli_query($conexion, $query);

if($resultado === true){
    echo "El Evento se eliminó correctamente";
}
else{
    echo "Ocurrió un error, intentá nuevamente";
}

mysqli_close($conexion);

?> 
