<?php

require 'conexion.php';

  $sql = 'SELECT * FROM categoria';
  $connection;
  $resultado = $connection->query($sql);
  $categorias = $resultado->fetch_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>categorias</title>

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  
</head>
<body>
<div class="container">
  <h1>Lista De Categorias</h1>
    <table class="table table-light">
      <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Accion</th>
      </tr>
      <tbody>
        <?php
          foreach($categorias as $categoria) {
            echo "<tr><td>".$categoria[0]."</td><td>".$categoria[1]."</td><td><a href=\"registrar.php?id=".$categoria[2]."\">Editar</a> | Eliminar</td></tr>";
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