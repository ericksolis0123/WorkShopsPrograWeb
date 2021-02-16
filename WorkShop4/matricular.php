<?php
 require 'conexion.php';
  
  $cedula = $_REQUEST['cedula'];
  $nombre = $_REQUEST['nombre'];
  $apellidos = $_REQUEST['apellidos'];
  $correo = $_REQUEST['correo'];
  $carrera = $_REQUEST['carrera'];
  $fecha = $_REQUEST['fecha'];

$matricular = "INSERT INTO matricula VALUES ('$cedula','$nombre','$apellidos','$correo','$carrera','$fecha') ";

$query = mysqli_query($connection, $matricular);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.php';
    </script>";
}