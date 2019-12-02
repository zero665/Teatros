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
$oro = $_POST['oro'];
$plata = $_POST['plata'];
$general = $_POST['general'];

$varsesion=$_SESSION['usu'];
$db= mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

if (!$db) {
    die("La conexion fallo: ".mysqli_connect_error());
    echo "falló";
}else{
    echo 'entró';
    echo $oro.' '.$plata.' '.$general;
      mysqli_query($db, "SET NAMES 'UTF8'");
      
      for ($i = 1; $i <= 10; $i++) {

          $sql= " INSERT INTO boleto VALUES (null, 1,1,'A-$i','ocupado',1,'$oro',750,	2019-12-25,14:00:00 );";
   $resultado= mysqli_query($db, $sql);
   if ($resultado) {
       echo"si insertó en oro";
   }
      }
      
       for ($i = 1; $i <= 10; $i++) {

          $sql= " INSERT INTO boleto VALUES (null, 1,1,'A-$i','ocupado',1,'$oro',750,	2019-12-25,14:00:00 );";
   $resultado= mysqli_query($db, $sql);
   if ($resultado) {
       echo"si insertó en plata";
   }
      }
      
       for ($i = 1; $i <= 10; $i++) {

          $sql= " INSERT INTO boleto VALUES (null, 1,1,'A-$i','ocupado',1,'$oro',750,	2019-12-25,14:00:00 );";
   $resultado= mysqli_query($db, $sql);
   if ($resultado) {
       echo"si insertó en general";
   }
      }
      
      header("location:/Teatros/roles/administrador/CreaFuncion.php");
    }
  