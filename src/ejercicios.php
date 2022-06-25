<?php

//Suma los valores que hay incluidos en un array

use PhpParser\Node\Expr\Cast\Array_;

//----Devuelve la Suma----//
function sumaArrays(array $arrays) : int{
    $valor = 0;
  foreach($arrays as $array){
    $valor += $array;
  }
  return $valor;
};

function sumaArraysDos (array $valores) : int {
    return array_sum($valores);//Funcion Array disponible
}
//www3Schools para ver las funciones y los Strings

//---Que devuelva el valor mayor de el Array

function devuelveMax(array $arrays) : int{
  $valorActual = $arrays[0];
  foreach($arrays as $valor){
     if($valorActual < $valor){
      $valorActual = $valor;
     }
     
    } 
    return $valorActual;
}

//--Calcular la media de edad de un Array de personas

function edadMedia(array $arrays) : int{
  $sumedades = 0;
  //Esta puede ser una opcion $totalPersonas = 0;
  //Con la siguiente funcion ya creada nos suma los numeros de elementos de Array
  $totalPersonas = count($arrays);
  foreach($arrays as $valor){
    $sumedades = $valor["edad"] + $sumedades; 
    
  }
  

  return $sumedades / $totalPersonas;
}

//Filtrar la edad se le pasa un Array y un numero entero y devulve array con las personas que tienen mas de la edad

function filtrarEdad(int $edad,array $personas){
  $filtrados = [];
  foreach($personas as $persona){
    if($persona["edad"] >= $edad){
      array_push($filtrados,$persona);
    } 
    
  }
   return $filtrados;

}









?>