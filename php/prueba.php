<?php
	require_once'deuda_codigos.php';
	require_once 'funciones.php';
	
	
	if(!isset($_GET['prov'])){
		echo json_encode(comunidadesDeudas(),JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
	}
	else if(isset($_GET['prov'])){
		
		echo json_encode(obtenerArrayProvinci($_GET['prov']),JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
	}
	
?>
                                                                                                                                                                     ayProvinci($_GET['prov']);
		// echo "<pre>".print_r(obtenerArrayProvinci($_GET['prov']),true)."</pre>";
		echo json_encode(obtenerArrayProvinci($_GET['prov']),JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
	}
	
?