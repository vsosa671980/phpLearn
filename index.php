<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>PHP Learn</title>
</head>
<body>

<?php
    include './header.php'
?>
    <h1>Learn de PHP</h1>
    <h2>Encontrar el archivo</h2>
    <h3>Prueba de Commit</h3>
<?php
//importar scripss

use PhpParser\Node\Expr\Cast\Object_;

require_once ('./ejercicios.php');
//require da fallo si el fichero no existe da error 500
//Include no fa fallo si no lo encuentra
//include_once evita que se puedan importar los mismos ficheros dos veces
//Require_once idem que include_once

//----VARIABLES----///
//Las variables que estan declaradas fuera de la clase no se pueden usar dentro

//Array de arrays asociativos
$movies = [
    ["nombre" => "batman",
    "genero" => "Aventuras"],

    ["nombre" => "Hulk",
    "genero" => "Aventuras"],

    ["nombre" => "Spiderman",
    "genero" => "Aventuras"]
];
//Suma de Arrays
echo"Que bueno";
$array = [1,2,3,4];

$valor = sumaArrays($array);

print "\n";
print "\n";
$valor2 = sumaArraysDos($array);
echo "$valor";
echo "$valor2";
$resultado = devuelveMax($array);
echo "Numero Maximo " . "$resultado";

//Array Asociativo de php
$personas = [
    ['nombre' => 'Carlos','edad' => 25],
    ['nombre' => 'Manolo','edad' => 44],
    ['nombre' => 'Pascual','edad' => 71]
];
print "<table>
          <thead>
              <th>Nombre</th>
              <th>Apellidos</th>
          </thead>
          <tbody>
              <tr>
                  <td>$nombre</td>
                  <td>$apellidos</td>
              </tr>
          </tbody>";

$edadMedia = edadMedia($personas);
//Pruebas
$persona -> nombre = $nombre;
$persona -> apellidos = $apellidos;

print_r($persona);

echo" La edad es "."$edadMedia";

foreach(filtrarEdad(18,$personas) as $persona){
   echo "$persona[nombre]";
   print "<br>";

}

//Anonymous Funtion
$square = function (int $number) : int {
    return $number * $number;
};
//Arrow function
//Pueden usarse variables creadas fuera
$number = 10;
$squareArrow = fn() => $number * $number;

echo "$squareArrow";

//Función que crea una tabla
function createTable(Array $movies) {
    print "<table>";
    print "<thead>";
    foreach ($movies as $key => $movie) {
        foreach ($movie as $key => $value) {

            print "
           
               <th>$key</th>
           
           <tbody>
               <tr>
               <td>$value</td>
               </tr>
           </tbody> "; 
        } 
    }
}
//--Servir Contenido PHP-----//

//Formulario Recogida de datos
$name =$_GET['name'];
echo"$name";

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

echo "Su nombre es " . "$nombre";
echo " Y su apellido es " . "$apellidos";

createTable($movies);
?>

</body>
</html>