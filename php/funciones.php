<?php

function comunidadesDeudas(){
 global $comunidad,$provincia,$deuda;
$array = array();

 foreach($comunidad as $clave => $valor){
    // obtenerDatosProvincia($clave);
    $array[] = array(
        'Provincia' => $valor,
        'Deuda' => obtenerDatosProvincia($clave) 
    );
 }
 return $array;
}

function obtenerDatosProvincia($indiceComunidad){
    global $provincia;
    $suma=0;
    foreach($provincia[$indiceComunidad] as $clave => $valor){
        $suma +=obtenerDatosPueblo($clave);
    }
    return $suma;
}

function obtenerDatosPueblo($clave){
    global $deuda;
    $suma=0;
    foreach($deuda[$clave] as $clave => $valor){
        // echo "<p>clave : ".$clave." => valor : ".$valor['deuda']."</p>";
        $suma += $valor['deuda'];
    }
    return $suma;
}


function obtenerArrayProvinci($indiceComunidad){
    global $provincia;

    foreach($provincia[$indiceComunidad] as $clave => $valor){
       
        $array[] = array(
        'Provincia' => $valor,
        'Deuda' => obtenerDatosPueblo($clave) 
        );
    }
    return $array;
}

?>