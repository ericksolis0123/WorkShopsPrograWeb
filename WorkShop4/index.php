<?php

require 'conexion.php';

  $sql = 'SELECT * FROM carreras';
  $connection;
  $resultado = $connection->query($sql);
  $carrera = $resultado->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matrícula</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
  $cedula = $_REQUEST['cedula'];
  $nombre = $_REQUEST['nombre'];
  $apellidos = $_REQUEST['apellidos'];
  $correo = $_REQUEST['correo'];
  $carrera = $_REQUEST['carrera'];
  $fecha = $_REQUEST['fecha'];
?>


<h1>Realizar Matrícula</h1>
  <div class="container-fluid">
    <form method="post" action="matricular.php">
        <div class="form-group">
          <label for="cedula">Cédula</label>
          <input id="cedula" class="form-control" type="text" name="cedula">
        </div>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
          <label for="apellidos">Apellidos</label>
          <input id="apellidos" class="form-control" type="text" name="apellidos">
        </div>
        <div class="form-group">
          <label for="correo">Correo</label>
          <input id="correo" class="form-control" type="text" name="correo">
        </div>
        <div class="form-group">
            <label for="carrera">Elige la carrera</label>

            <!-- <select name="carrera" id="">

            <?php
            while($datos = mysqli_fetch_array($carrera)) 
            {

            }
    
            ?>
            
            </select> -->


            <input id="carrera" class="form-control" type="text" name="carrera">
        </div>


        <div class="form-group">
        <?php

        date_default_timezone_set('America/Costa_Rica');
        $fecha_actual=date("Y-m-d H:i:s");
        
        ?>

          <label for="fecha">Fecha Actual</label>
          <input id="fecha" class="form-control" type="datetime" name="fecha" value="<?= $fecha_actual?>" disabled>
        </div>

        <button class="btn btn-primary" type="submit">Matricular</button>
    </form>
  </div>
  <br>
  <br>
  <br>
  <a href="mostrarMatricula.php">Mostrar Matriculas</a>
</body>
</html>