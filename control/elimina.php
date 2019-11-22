<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start(); 

$nombre=$_GET['nombreLibro'];
$servidor = "localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="prograweb";

$db= mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);
//
 $sql= "delete from libros where nombreLibro='$nombre'";
   $resultado= mysqli_query($db, $sql);

//?>
<script type="text/javascript">
alert("El libro a sido eliminado exitosamente");
window.location.href='../roles/administrador/Bienvenido.php';
</script>
