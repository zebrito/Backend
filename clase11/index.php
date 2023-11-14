<table style="border: solid 2px black;">
<td style="border: solid 2px black;">Evento N°</td>
<td style="border: solid 2px black;">Nombre del Evento</td>
<td style="border: solid 2px black;">Fecha del Evento</td>
<td style="border: solid 2px black;">Tanda Activa</td>
<td style="border: solid 2px black;">Precio Tanda</td>
<td style="border: solid 2px black;">Status Evento</td>
<td style="border: solid 2px black;">Acciones</td>
<?php

$conexion = mysqli_connect("localhost:3306","root","","bdd_ngm");
$query = "SELECT * FROM eventos";
$resultado = mysqli_query($conexion, $query);

while($unaFila = mysqli_fetch_assoc($resultado)){
 echo "<tr>";
 echo "<td>".$unaFila ["evento_nro"]."</td>";
 echo "<td>".$unaFila ["fecha_evento"]."</td>";
 echo "<td>".$unaFila ["nombre_evento"]."</td>";
 echo "<td>".$unaFila ["tanda_evento"]."</td>";
 echo "<td>".$unaFila ["precio_tanda"]."</td>";
 echo "<td>".$unaFila ["status_evento"]."</td>";
 echo "<td> <a href='./eliminar_producto.php?id=".$unaFila["evento_nro"]."'>Eliminar</a></td>";
 echo "</tr>";
}


mysqli_close($conexion);

?> 
</table>
