<?php
    $controlador = new ControladorPersona();
    $resultado = $controlador->index();
?>

<h3>Base de Datos de Personas</h3>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cédula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while($fila = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?php echo $fila["id"]; ?></td>
                <td><?php echo $fila["cedula"]; ?></td>
                <td><?php echo $fila["nombres"]; ?></td>
                <td><?php echo $fila["apellidos"]; ?></td>
                <td><?php echo $fila["usuario"]; ?></td>
                <td><?php echo $fila["clave"]; ?></td>
                <td>
                    <a href="?load=ver&id=<?php echo $fila["id"]; ?>">Ver</a> |
                    <a href="?load=editar&id=<?php echo $fila["id"]; ?>">Editar</a> |
                    <a href="?load=eliminar&id=<?php echo $fila["id"]; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>