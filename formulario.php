<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<?php
    require_once ('./menu.php')
?>

<h1>Formulario</h1>

  <form action="./peticiones.php" method="post">
    <label for="">Nombre</label>
    <input type=text id="nombre" name="nombre">

    <label for="apellidos">Apellidos</label>
    <input type=text id="apellidos" name="apellidos">

    <input type="submit">


  </form>


    
</body>
</html>