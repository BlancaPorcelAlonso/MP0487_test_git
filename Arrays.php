<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => "23", "ciudad" => "Barcelona");
    $i = 1;

    echo "<br>EJERCICIO 1<br>";

    foreach ($datos as $value) {
        echo "Dato " . $i . ": " . $value . "<br>";
        $i++;
    }

    echo "<br> EJERCICIO 2<br>";
    foreach ($datos as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

    echo "<br> EJERCICIO 3<br>";
    $datos["edad"] = "24";
    foreach ($datos as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
    echo "<br> EJERCICIO 4<br>";
    unset($datos["ciudad"]);
    echo var_dump($datos) . "<br>";

    echo "<br> EJERCICIO 5<br>";
    $letters = "a,b,c,d,e,f";
    $lettersArray = explode(",", $letters);

    for ($i = 6; $i > 0; $i--) {
        echo "letter " . $i . ": " . $lettersArray[$i - 1] . "<br>";
    }

    echo "<br> EJERCICIO 6<br>";
    $notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
    arsort($notas);
    echo "Notas de los estudiantes:";
    foreach ($notas as $key => $value) {
        echo " " . $key . ": " . $value;
    }

    echo "<br><br> EJERCICIO 7 <br>";
    $notaMedia = 0;
    $i = 0;
    foreach ($notas as $value) {
        $notaMedia += $value;
        $i++;
    }

    $notaMedia = number_format($notaMedia, 2);

    echo "Nota media: " . $notaMedia . "<br>";

    foreach ($notas as $key => $value) {
        if ($value > $notaMedia)
            echo $key . "<br>";
    }

    echo "<br> EJERCICIO 8 <br>";
    $notaMax = -1;
    $alumnoNotaMax = "";
    foreach ($notas as $key => $value) {
        if ($value > $notaMax) {
            $notaMax = $value;
            $alumnoNotaMax = $key;
        }
    }

    echo "La nota mas alta es " . $notaMax . " y el mejor alumno es " . $alumnoNotaMax;