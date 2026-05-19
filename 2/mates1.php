<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php

    //Funciones mates

    $edad = 22;
    $nota = 7.34;

    if (is_int($edad)) {
        echo "Edad es un entero";
    }

    if (is_int($nota)) {
        echo "Nota es un entero";
    } elseif (is_float($nota)) { 
        echo "Nota es un decimal";
    }

    ?>
</body>
</html>