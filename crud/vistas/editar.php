<?php
    $controlador = new ControladorPersona();

    if(isset($_GET['id'])){
        $registro = $controlador->ver($_GET['id']);
    }else{
        header('Location: index.php');
    }

    if(isset($_POST['editar'])){
        $controlador->editar($_GET['id']);
        header('Location: index.php');
    }
?>

<h1>Editar registro ✏️</h1>
<form method="post">
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Clave</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $registro['id']; ?></td>
                <td><?php echo $registro['cedula']; ?></td>
                <td><?php echo $registro['nombres']; ?></td>
                <td><?php echo $registro['apellidos']; ?></td>
                <td><input type="text" name="usuario" value="<?php echo $registro['usuario']; ?>" required></td>
                <td><input type="text" name="clave" value="<?php echo $registro['clave']; ?>" required></td>
                <td><input type="submit" name="editar" value="Guardar"></td>
            </tr>
        </tbody>
    </table>
</form>