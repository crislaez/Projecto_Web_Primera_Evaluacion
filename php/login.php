<?php
require_once 'conexion.php';

if(isset($_POST)){
    $email = $_POST['email'];
    $clave = $_POST['clave'];
   
    $buscarEmail = mysqli_real_escape_string($conexion,$email);
    $buscarClave = mysqli_real_escape_string($conexion,$clave);
 
    $sql = "SELECT * FROM `registros` WHERE `correo` LIKE '$buscarEmail' AND `clave` LIKE '$buscarClave'";

    $resultado = mysqli_query($conexion,$sql);
    
    if(!$resultado){
        
        die('<p>Error '.mysqli_errno($conexion).' : '.mysqli_error($conexion).'</p>');
    }
    
    @$resultado = mysqli_query($conexion, $sql) or die ("<p>Error de BBDD: ERROR ".mysqli_connect_errno($conexion).":".mysqli_connect_error($conexion)."</p>\n");

    //*************************************************************
    //4.Hacemos cosas con los registros devueltos, por ejemplo un control select option
    //*************************************************************
   
    if($file = mysqli_fetch_assoc($resultado)){
        echo 'true';
    }
    else{
        echo 'false';
    }
  
    //limpiar el resultado para dejar espacion en la memoria
    mysqli_free_result($resultado);
    //cerrar la conexion
    mysqli_close($conexion);
    
}
    

?>