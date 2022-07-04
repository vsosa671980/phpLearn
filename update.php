<?php

 require_once('./databaseconnect.php');

 try {
    $query = "UPDATE `Personas` SET `nombre` = 'Susana', `apellidos` = 'Pla' WHERE `Personas`.`id` = 1";
    $stmt =$conn->prepare($query);
    $stmt->execute();
  
    require_once './peticiones.php';
       
 } catch (PDOException $e) {
    echo $e->getMessage();
    echo "Se ha producido error en la base de datos";
 }

 ?>