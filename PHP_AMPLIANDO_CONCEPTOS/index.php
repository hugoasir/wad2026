<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="objetivos.css" />
    <title>Seguimiento de objetivos</title>
</head>
<body>
    <div id="contenedor">
        <h1>Nuevo Objetivo</h1>
        <form action="insertar_objetivo.php" method="post">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria">
                <option value="0">Personal</option>
                <option value="1">Profesional</option>
                <option value="2">Otra</option>
            </select>

            <label for="texto">Objetivo</label>
            <textarea name="texto" id="texto"></textarea>

            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" />

            <label for="completo">Objetivo completado</label>
            <input type="checkbox" id="completo" name="completo" value="1" />
            <br/>

            <button type="submit">Insertar Objetivo</button>
        </form>

<?php

    require_once "conexion.php";

    $sql = "SELECT * FROM objetivos";
    $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion, $sql) or die(mysqli_error));

    print("<h2>Objetivos incompletos</h2>");

    //Objetivos incompletos
    while($fila = mysqli_fetch_array($resultado)){
        if($fila['completo_objetivo'] == 0){
            if($fila['categoria_objetivo'] == 0){
                $categoria = "Personal";
            }
            elseif($fila['categoria_objetivo'] == 1){
                $categoria = "Profesional";
            }
            else{
                $categoria = "Otra";
            }

            echo "<div class='objetivo'>";
            echo "<h3>" . $fila['texto_objetivo'] . "</h3>";
            echo "<p>" . $categoria . "</p>";
            echo "<p>" . $fila['fecha_objetivo'] . "</p>";
            echo "</div>";
        }
    }

?>

    </div>
</body>
</html>