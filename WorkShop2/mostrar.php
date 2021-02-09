<?php

require 'conexion.php';

  $sql = 'SELECT * FROM usuarios';
  $connection;
  $resultado = $connection->query($sql);
  $usuarios = $resultado->fetch_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Usuarios</title>

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  
</head>
<body>
<div class="container">
  <h1>Lista De Usuarios</h1>
    <table class="table table-light">
      <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
      </tr>
      <tbody>
        <?php
          foreach($usuarios as $usuario) {
            echo "<tr><td>".$usuario[0]."</td><td>".$usuario[1]."</td><td>".$usuario[2];
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