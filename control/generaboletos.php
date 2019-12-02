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
      mysqli_query($db, "SET NAMES 'UTF8'");
    $sql= " INSERT INTO boleto VALUES (null, 1,1,'a-1','ocupado',1,'$oro',750,	2019-12-25,14:00:00 );";
   $resultado= mysqli_query($db, $sql);
echo $resultado;
    }
  