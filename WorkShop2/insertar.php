<?php
 require 'conexion.php';
  
 $firstname  = $_POST['firstname'];
 $lastname  = $_POST['lastname'];
 $email = $_POST['email'];

$insertar = "INSERT INTO usuarios VALUES ('$firstname','$lastname','$email') ";

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