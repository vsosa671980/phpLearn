<?php

 require_once('./databaseconnect.php');


 try {
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellidos'];
   $telefono = $_POST['telefono'];
   var_dump($nombre);

   $query = "INSERT INTO `Personas` (`id`, `nombre`, `apellidos`, `telefono`) VALUES (NULL, '$nombre', '$apellido', '$telefono') ";
   $conn->query($query);
   
    require_once './table.php';
    
 } catch (PDOException $e) {
    echo $e->getMessage();
    echo "Se ha producido error en la base de datos";
 }


 ?>