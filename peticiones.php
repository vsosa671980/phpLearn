<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

<?php
   require_once ('./menu.php');
?>


    <h1>Peticiones de PHP</h1>



    <?php

    //Funcion para calcular el dia de la semana que es
    //Con este metodo sacamos el dia de la semana en ingles
    $dayOfWeek = date('l');

    //Con esta función lo pasamos al español
    function calcDay($dayOfWeek): string
    {

        switch ($dayOfWeek) {
            case 'Monday':

                return  $day = "Lunes";
                break;
            case 'Tuesday':
                return  $day = "Martes";
                break;
            case 'Friday':
                return $day = "Viernes";
                break;
            default:
                return "Hoy es un dia cualquiera";
                break;
        }
    }

    //Insertamos un Array
    $valores = ["casa", "coche"];
    $variable = "Esto es una variable";
    //No funiona el echo de los arrays
    echo $valores;
    echo $variable;
    print_r($valores);
    //Un echo de una variable booleana no sale nada
    //So haces un echo de un false si
    print "<h2>Estamos mandando a imprimir datos a la pagina </h2>";
    print "<h2>Hola que tal esto es lo que estoy mostrando : </h2>" . "$variable";
    print "<h2>Mostramos el dia de la semana</h2>";
    print "<p>Hoy es dia : <strong>" . calcDay($dayOfWeek) . "</p>";

    ?>

    <!--Peticiones Get -->
   
    <?php
     print_r($_GET);
     $nombre = $_GET['nombre'];
     print "$nombre";
    
    ?>

    <!-- Peticiones Formularios POST --->

    <?php
    $name = $_POST['nombre'];
    print "$name";
    $apellidos = $_POST['apellidos'];
    print "$apellidos";
   
 
    ?>


</body>

</html>