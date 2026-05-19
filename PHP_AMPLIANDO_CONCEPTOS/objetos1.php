<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>
    <?php

    class PrimeraClase
    {

        public $nombre = "Luisja";

        public function mostrarNombre() {
            echo $this->nombre;
        }

    }

    $instancia = new PrimeraClase();
    $instancia->mostrarNombre();

    ?>
</body>
</html>