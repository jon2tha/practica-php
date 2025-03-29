<?php
    $controlador= new ControladorPersona();
    $resultado = $controlador->index();
?>
    <h3>Tabla base de datos </h3>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>identifiacion</th>
                <th>nombres</th>
                <th>apellidos</th>
                <th>usuario</th>
                <th>clave</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    while($row=mysqli_fetch_assoc($resultado))
                    {
                        echo   "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row ["cedula"] . "</td>";
                            echo "<td>" . $row ["nombres"] . "</td>";
                            echo "<td>" . $row ["apellidos"] . "</td>";
                            echo "<td>" . $row ["usuario"] . "</th>";
                            echo "<td>" . $row ["clave"] . "</td>";
                            echo " <td><a href= '?load=ver&id=". $row["id"] . " '> Ver </a>
                                                <a href = '?load=editar&id=" . $row["id"] . " '> Editar </a>
                                                <a href = '?load=eliminar&id=". $row["id"] . " '>Eliminar </a></td>";
                           /* <th>Actions</th>*/
                        echo "</tr>";
                    }

            ?>
        </tbody>
    </table>


