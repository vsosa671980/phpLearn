<?php

 require_once('./databaseconnect.php');


 try {
    $id = $_GET['id'];
    $query = "DELETE FROM Personas Where id = $id";
   
    $conn->exec($query);
    echo "Borrado";
    require_once './table.php';
    
 } catch (PDOException $e) {
    echo $e->getMessage();
    echo "Se ha producido error en la base de datos";
    
 }


 ?>