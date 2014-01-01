<?php
function historialBusqueda($usuario,$busqueda,$conn){
	$fecha=date("Y-m-d H:i:s", time());
	$query = "INSERT INTO busquedas VALUES (NULL,$usuario,'$busqueda','$fecha')";
	return mysql_query($query, $conn);
}
function historialVisita($usuario,$id_anuncio,$conn){
	$fecha=date("Y-m-d H:i:s", time());
	$query = "INSERT INTO busquedas VALUES (NULL,$id_anuncio,$usuario,'$fecha')";
	return mysql_query($query, $conn);
}
?>