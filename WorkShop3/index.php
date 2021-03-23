<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categorias</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
  $nombre = $_REQUEST['nombre'];
  $descripcion = $_REQUEST['descripcion'];
?>


<h1>Registrar Categoria</h1>
  <div class="container-fluid">
    <form method="post" action="registrar.php">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <input id="descripcion" class="form-control" type="text" name="descripcion">
        </div>
        <button class="btn btn-primary" type="submit">Registrar</button>
    </form>
  </div>
  <br>
  <br>
  <br>
  <a href="mostrar.php">Mostrar categorias</a>
</body>
</html>