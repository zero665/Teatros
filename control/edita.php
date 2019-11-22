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
$id=$_GET['id'];
 $servidor = "localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="prograweb";

$db= mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

  $sql= "Update libros Set nombreLibro='$nombre', autor='$autor', precio='$precio' Where id_libro=$id";
   $resultado= mysqli_query($db, $sql);

?>
<script type="text/javascript">
alert("El libro a sido modificado exitosamente");
window.location.href='../roles/administrador/Bienvenido.php';
</script>
