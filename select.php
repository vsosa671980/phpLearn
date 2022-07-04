<?php

 require_once('./databaseconnect.php');


 try {
    $query = "SELECT * FROM personas";
    $stmt =$conn->prepare("SELECT * FROM Personas");
    $stmt->execute();
    //Indicamos de que modo nos devuelve el array.Hacemos la configuracion
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //Ahora le pedimos que haga el Fetch y nos devuelve un array con todas las filas obtenidas
    $results = $stmt->fetchAll();
    // Lo pasamos a un json en caso de que no lo queramos en formato Array
    $jsonResult = json_encode($results);
    
    //Con esto cargamos la tabla y le cargamos los datos de la base de datos
 
    
 } catch (PDOException $e) {
    echo $e->getMessage();
    echo "Se ha producido error en la base de datos";
 }


 ?>