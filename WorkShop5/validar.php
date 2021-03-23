<?php
include('conexion.php');
$usuario=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","workshop5");

$consulta="SELECT*FROM usuarios where correo='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_fetch_array($resultado);

if($filas['id_rol'] == 1){
  
    header("location:matricula.php");

}else
if($filas['id_rol'] == 2){
    header("location:bienvenida.php");
}
else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">DATOS INCORRECTOS</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);