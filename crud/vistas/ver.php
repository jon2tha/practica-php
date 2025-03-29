<?php
    $controlador = new ControladorPersona();

    if(isset($_GET['id'])){
        $registro = $controlador->ver($_GET['id']);
    }else{
        header('Location: index.php');
    }
?>

<h1>Detalles del registro 👁️</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cédula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Usuario</th>
            <th>Clave</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $registro['id']; ?></td>
            <td><?php echo $registro['cedula']; ?></td>
            <td><?php echo $registro['nombres']; ?></td>
            <td><?php echo $registro['apellidos']; ?></td>
            <td><?php echo $registro['usuario']; ?></td>
            <td><?php echo $registro['clave']; ?></td>
        </tr>
    </tbody>
</table>