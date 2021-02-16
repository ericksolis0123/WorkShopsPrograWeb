<?php

require 'conexion.php';

  $sql = 'SELECT * FROM matricula';
  $connection;
  $resultado = $connection->query($sql);
  $matriculas = $resultado->fetch_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Matriculas</title>

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  
</head>
<body>
<div class="container">
  <h1>Lista De Matriculas</h1>
    <table class="table table-light">
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo Electrónico</th>
        <th>Carrera</th>
      </tr>
      <tbody>
        <?php
          foreach($matriculas as $matricula) {
            echo "<tr>".$matriculas[0]."</td><td>".$matricula[1]."</td><td>".$matricula[2]."</td><td>".$matricula[3]."</td><td>".$matricula[4]."</td><tr>";
          }
        ?>
      </tbody>
    </table>
    <?php

  $connection->close();
?>
</div>
</body>
</html>