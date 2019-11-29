<?php


session_start(); 

$nombre = $_POST['nomlib'];
$autor = $_POST['aut'];
$precio = $_POST['pre'];

$servidor = "localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="teatros";

$db= mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);


?>

