<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>
<body>

<?php
$_SESSION['iniciada'] = true;
echo "<br>";

$_SESSION['nombre'] = "Luisja";
echo "<br>";

var_dump($_SESSION);
echo "<br>";

echo "Nombre " . $_SESSION['nombre'];
echo "<br>";

unset($_SESSION['nombre']);

if(isset($_SESSION['nombre']) == false) {
    echo "Nombre no definido";
}

session_destroy();
?>

</body>
</html>