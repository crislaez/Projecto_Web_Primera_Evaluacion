<?php

    define('SERVIDOR','localhost'); //el servidor local
    define('BBDD','webcristian'); //la base de datos
    define('USUARIO','root'); //el usuario
    define('CLAVE',''); //la clave del usuario

    $conexion = mysqli_connect(SERVIDOR,USUARIO,CLAVE,BBDD) OR
    die('<p>Error de BBDD'.mysqli_connect_error().'</p>\n');

    mysqli_set_charset($conexion,'utf8');

?>
