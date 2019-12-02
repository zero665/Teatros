<?php
session_start();
$servidor = "localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="teatros";

$db= mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

$espectaculo = $_POST["espectaculo"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$teatro = $_POST["teatro"];
$director = $_POST["director"];
$elenco = $_POST["elenco"];
$file = $_POST["file"];

if (!$db) {
    die("La conexion fallo: ".mysqli_connect_error());
}else{
    mysqli_query($db, "SET NAMES 'UTF8'");
    $sql= "INSERT INTO `funcion` (`id_funcion`, `id_teatro`, `nombre`, `director`, `elenco`, `fecha`, `hora`, `imagen`) "
            . "VALUES ('1', '2', '$espectaculo', '$director', '$elenco', '$fecha', '$hora', NULL);";
   $resultado = mysqli_query($db, $sql);
   echo "funcion creada";
}
//header("location:../administrador/generaBoletos.php");
mysqli_close($db);




