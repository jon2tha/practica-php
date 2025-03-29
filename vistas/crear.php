<?php
    $controlador = new ControladorPersona(); 
    $res = false; // Inicializar $res antes de usarla

    if(isset($_POST['enviar'])){
        $res = $controlador->crear($_POST['cedula'], $_POST['nombres'], $_POST['apellidos'], $_POST['usuario'], $_POST['clave']);
        header('Location: index.php');
        exit(); // Asegura que el script se detenga después de redirigir
    }

    if($res){
        echo "Se realizó con éxito";
    } 
     
    
?>

<form action="" method="post">
    <input type="text" name="cedula" value="<?php echo isset($registro['cedula']) ? $registro['cedula'] : ''; ?>"> <br>
    <input type="text" name="nombres" value="<?php echo isset($registro['nombres']) ? $registro['nombres'] : ''; ?>"> <br>
    <input type="text" name="apellidos" value="<?php echo isset($registro['apellidos']) ? $registro['apellidos'] : ''; ?>"> <br>
    <input type="text" name="usuario" value="<?php echo isset($registro['usuario']) ? $registro['usuario'] : ''; ?>"> <br>
    <input type="password" name="clave" value="<?php echo isset($registro['clave']) ? $registro['clave'] : ''; ?>"> <br>
    <input type="submit" name="enviar" value="Registrar"> <br>
</form>
