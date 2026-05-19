<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>
<?php

    //var_dump($_FILES);

    $directorio = ini_get("upload_tmp_dir");
    echo $directorio;

    $directorioTemp = $_FILES['imagen']['tmp_name'];
    move_uploaded_file($directorioTemp, $_FILES['imagen']['name']);

?>
</body>
</html>