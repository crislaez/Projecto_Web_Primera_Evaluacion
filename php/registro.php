<?php
require_once 'conexion.php';

if(isset($_POST)){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha = $_POST['fecha'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $clave = $_POST['clave'];
    $rClave = $_POST['rClave'];

    $var1 = mysqli_real_escape_string($conexion,$nombre);
    $var2 = mysqli_real_escape_string($conexion,$apellido);
    $var3 = mysqli_real_escape_string($conexion,$fecha);
    $var4 = mysqli_real_escape_string($conexion,$email);
    $var5 = mysqli_real_escape_string($conexion,$sexo);
    $var6 = mysqli_real_escape_string($conexion,$clave);
    $var7 = mysqli_real_escape_string($conexion,$rClave);
    
    $sql = "INSERT INTO registros (id, nombre, apellido, fecha, correo, sexo, clave, rclave) VALUES ('','$var1','$var2','$var3','$var4','$var5','$var6','$var7')";
        
        $querie = $conexion->query($sql); 

        if($querie == true){
            echo "registro exitoso";
        }
        else{
            echo "registro fallo";
        }

        mysqli_close($conexion);
}
    

?>