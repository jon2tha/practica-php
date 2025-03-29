<?php
    $controlador = new ControladorPersona();

    if(isset($_GET['id'])){
        $registro = $controlador->ver($_GET['id']);
    }else{
        header('Location: index.php');
    }

    if(isset($_POST['eliminar'])){
        $controlador->eliminar($_GET['id']);
        header('Location: index.php');
    }
?>

<h1>Eliminar registro 🚮</h1>
<form method="post">
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $registro['id']; ?></td>
                <td><?php echo $registro['cedula']; ?></td>
                <td><?php echo $registro['nombres']; ?></td>
                <td><?php echo $registro['apellidos']; ?></td>
                <td><?php echo $registro['usuario']; ?></td>
                <td><input type="submit" name="eliminar" value="Eliminar"></td>
            </tr>
        </tbody>
    </table>
</form>