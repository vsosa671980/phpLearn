



<?php
//Hay que hacerlo antes de hacer el primer Json
header('Content-type: application/json');

//CORS

header('Acces-Control-Aloow-Origin: *');
header(("Acces-Control-Aloow-Headers:"));
header(("Acces-Control-Aloow-Methods:"));
 //Generamos un Array
 $people = [

    ['name' => 'Vicente','surname' => 'Sosa'],
    ['name' => 'Erika','surname' => 'Sosa'],
    ['name' => 'Ruben','surname' => 'Sosa'],
    ['name' => 'Susana','surname' => 'Pla'],

 ];

 $json = json_encode($people);
 //Para generar Json de un Array
  echo json_encode($people);
  json_decode($json);
  var_dump($json);





?>




