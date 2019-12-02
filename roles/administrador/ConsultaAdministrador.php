<?php
include './../../control/conecta.php';
// 1) Conexión

if ($db){
echo "<h2>Funciones</h2>";
echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";

// 2) Preparar la orden SQL
$consulta= "SELECT*FROM espectaculo;";

// 3) Ejecutar la orden y obtener datos
mysqli_select_db($db,"teatros");
$datos= mysqli_query($db,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
        echo "<div>";
        echo "<table>";
        echo "<tr>";
        echo "<th>ID de función</th>";
        echo "<th>Nombre espectáculo</th>";
        echo "<th>Elenco</th>";
        echo "<th>Director</th>";
        echo "<th>Póster</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td>";
        echo $fila["id_espectaculo"];
        echo "</td>";
        echo "<td>";
        echo $fila["nombre"];
        echo "</td>";
        echo "<td>";
        echo $fila ["elenco"];
        echo "</td>";
        echo "<td>";
        echo $fila["director"];
        echo "</td>";
        echo "<td>";
        echo $fila["imagen"];
        echo "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
}

}else{
echo "<p> MySQL no conoce ese usuario y password</p>";
}
mysqli_close($db);
?> 

