<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
$servidor = "localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="teatros";
$correo = $_POST['uname'];
$contra = $_POST['psw'];
$_SESSION['usu']=$correo;
$varsesion=$_SESSION['usu'];
$db= mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

if (!$db) {
    die("La conexion fallo: ".mysqli_connect_error());
}else{
    mysqli_query($db, "SET NAMES 'UTF8'");
    $sql= "select * from usuarios where usuario='$correo' and contrasenia='$contra'";
   $resultado= mysqli_query($db, $sql);
   $filas=  mysqli_num_rows($resultado);
   if ($filas>0) {
       $sql = "select rol from usuarios where usuario='$correo' and contrasenia='$contra'";
    $result = $db->query($sql);
    $row = $result->fetch_row(); 
    if ($row[0]=="cliente") {
         header("location:/Teatros/roles/cliente/Consultacartelera.php");
    }else if ($row[0]=="administrador") {
        header("location:/Teatros/roles/administrador/CreaFuncion.php");
    }
  
//echo "$row[0] <br/>soy la sesion: $varsesion";
   }else{
      
       header("location:../index.php");
   }
   
}
mysqli_free_result($resultado);
mysqli_close($db);
