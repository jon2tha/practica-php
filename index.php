<?php
    include_once("controladores/enrutador.php");
    include_once("controladores/controlador.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <h1>Ejercicio CRUD con PHP y MVC </h1>
    <nav>
        <ul>
            <li><a href="index.php">Inicio </a></li>
            <li><a href="?load=crear">Registrar nuevo </a></li>
        </ul>
    </nav>

    <section>
        <?php
        $enrutador = new Enrutador();

        $vista = isset($_GET['load']) ? $_GET['load'] : '';

        if($enrutador->validarVista($vista)){
            $enrutador->cargarVista($vista);
        }
        ?>
    </section>
</body>
</html>