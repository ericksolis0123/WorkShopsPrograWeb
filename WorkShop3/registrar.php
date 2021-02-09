<?php
 require 'conexion.php';
  
 $nombre = $_REQUEST['nombre'];
 $descripcion = $_REQUEST['descripcion'];

$insertar = "INSERT INTO categoria VALUES ('$nombre','$descripcion') ";

$query = mysqli_query($connection, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.php';
    </script>";
}