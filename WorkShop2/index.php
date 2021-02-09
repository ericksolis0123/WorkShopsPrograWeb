<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
  $firstName = $_REQUEST['firstname'];
  $lastName = $_REQUEST['lastname'];
  $email = $_REQUEST['email'];

?>


<h1>User Signup</h1>
  <div class="container-fluid">
    <form method="post" action="insertar.php">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input id="firstname" class="form-control" type="text" name="firstname">
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input id="lastname" class="form-control" type="text" name="lastname">
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input id="email" class="form-control" type="email" name="email">
        </div>
        <button class="btn btn-primary" type="submit">Sign up</button>
    </form>
  </div>
  <br>
  <br>
  <br>
  <a href="mostrar.php">Mostrar lista de usuarios</a>
</body>
</html>