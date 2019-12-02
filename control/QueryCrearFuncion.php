<?php
session_start();
$servidor = "localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="teatros";

$db= mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

if (!$db) {
    die("La conexion fallo: ".mysqli_connect_error());
}else{
    mysqli_query($db, "SET NAMES 'UTF8'");
    $sql= "insert into 'espectaculo' ('id_espectaculo', 'nombre','elenco','director','imagen')
values ('2','$espectaculo','$elenco','$descripcion','null')";
   $resultado = mysqli_query($db, $sql);
   echo "Función creada";
}
header("location:../administrador/generaBoletos.php");
mysqli_close($db);





// Incluimos los datos de conexión y las funciones:
include("ConectarBase.php");
include("index.php");
//Crear variables locales
$espectaculo = $_POST["espectaculo"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$teatro = $_POST["teatro"];
$tipoespect = $_POST["tipoespect"];
$elenco = $_POST["elenco"];
$descripcion = $_POST["descripcion"];
$file = $_POST["file"];
// Usamos esas variables:
//if ($db) {

// Aquí irá el resto validar variables vacias

//if (isset($_POST["espectaculo"], $_POST["fecha"], $_POST["hora"], $_POST["teatro"], $_POST["tipoespect"], $_POST["elenco"], $_POST["descripcion"], $_POST["file"] ) and $_POST["espectaculo"] !="" and $_POST["fecha"] !="" and $_POST["hora"] !="" and $_POST["teatro"] !="" and $_POST["tipoespect"] !="" and $_POST["elenco"] !="" and $_POST["descripcion"] !="" and $_POST["file"]!="" ){


//preparar consulta
//INSERT INTO `espectaculo` (`id_espectaculo`, `nombre`, `elenco`, `director`, `imagen`) VALUES ('0', 'billi elliot', 'yo, tu, el, ella', 'tambien yo', NULL);
//$consulta = "insert into 'espectaculo' ('id_espectaculo', 'nombre, 'teatro','fecha','hora','elenco','descripcion','tipo_funcion')
//values ('0','$nombre_espectaculo','$fecha','$hora','$teatro','$tipo_espect','$elenco','$desc','$poster')";
$consulta = "insert into 'espectaculo' ('id_espectaculo', 'nombre', 'elenco','director','imagen')
values ('3','$espectaculo','$elenco','$descripcion','null')";

$crea = mysqli_query($db, $consulta);


//} else {
//echo '<p>Por favor, complete el <a href="index.php">formulario</a></p>';
//}

//} else {
//echo"<p>Servicio interrumpido</p>";

//}


