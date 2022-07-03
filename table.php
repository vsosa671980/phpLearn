<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Table</title>
</head>
<body>


<?php
   require_once ('./menu.php');
?>

  <h1>Esto es la tabla de los usuarios</h1>

  <?php

    //Cremos una array de nombres de personas con un array asociativo
    $personas = [
        [
            'nombre' => 'Vicente',
            'edad' => 42,
            'Altura' => 1.69
        ],
        [
            'nombre' => 'Ruben',
            'edad' => 7,
            'Altura' => 1
        ],
        [
            'nombre' => 'Erika',
            'edad' => 12,
            'Altura' => 1.69
        ],

    ];

    ?>

    <table>
        <thead>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Altura</th>
        </thead>

        <tbody>

            <!-- Recorremos el array Asociativo -->
            <?php
            foreach ($personas as $value) {
                
                print "<tr>";
                print "<td>" . $value['nombre'] . "</td>";
                print "<td>" . $value['edad'] . "</td>";
                print "<td>" . $value['Altura'] . "</td>";
                print "</tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="./javascript/main.js"></script>
</body>
</html>