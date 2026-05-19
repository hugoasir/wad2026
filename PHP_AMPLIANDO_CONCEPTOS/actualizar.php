<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>
<?php

    $minombre = $_GET["nombre"];
    $modificar = $_GET["seleccionar"];

    $host = "localhost";
    $usuario = "root";
    $pass = "";

    $conexion = mysqli_connect($host, $usuario, $pass) or die("Error de conexión");

    mysqli_select_db($conexion, "usuarios");

    $sql = "UPDATE clientes SET nombre = '$minombre' WHERE nombre = '$modificar'";

    if(mysqli_query($conexion, $sql)){
        echo "Registro actualizado con éxito";
    }else{
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);

?>
</body>
</html>