<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start(); 

$nombre = $_POST['nomlib'];
$autor = $_POST['aut'];
$precio = $_POST['pre'];

$servidor = "localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="prograweb";

$db= mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);
//
 $sql= "insert into libros values(NULL, '$nombre', '$autor', $precio)";
   $resultado= mysqli_query($db, $sql);
//echo "$nombre <br/>$autor<br/>$precio";

//?>
<script type="text/javascript">
alert("El libro a sido agreagdo exitosamente");
window.location.href='../roles/administrador/Bienvenido.php';
</script>
