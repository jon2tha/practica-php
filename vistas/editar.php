<?php
    $controlador = new ControladorPersona();

    if(isset($_GET['id'])){
        $registro = $controlador->ver($_GET['id']);
    }else{
        header('Location: index.php');
    }

    if(isset($_POST['editar'])){
        $controlador->editar($_GET['id'],$_POST['nombres'],$_POST['apellidos'],$_POST['usuario']);
        header('Location: index.php');
    }

 




?>

<h1>Editar registro </h1>



<form action="" method="post">

<input type="text" name="cedula" value ="<?php echo $registro['cedula']?>;"disabled>  <br>
<input type="text" name="nombres" value ="<?php echo $registro['nombres'];?>"> <br>

<input type="text" name="apellidos" value ="<?php echo $registro['apellidos'];?>" > <br>
<input type="text" name="usuario" value ="<?php echo $registro['usuario'];?>"> <br>

<input type="text" name="clave" value ="<?php echo $registro['clave'];?>" disabled> <br>
<input type="submit" name="editar" value="actualizar" > <br>




</form>







