<?php
	$host="localhost";
	$user="cdfu_muse";
	$password="3m9YurfZvv5z2HUX";
	$db="cdfu_muse";

	//$conexion=mysql_connect($host, $user, $password);

	$conexion=mysql_connect($host, $user, $password) or die ("ERROR 404, no se pudo conectar al servidor");
//echo "SE CONECTO CORRECTAMENTE! =D";
mysql_select_db($db,$conexion) or die ("ERROR 404, no se pudo conectar con la Base de Datos");

?>