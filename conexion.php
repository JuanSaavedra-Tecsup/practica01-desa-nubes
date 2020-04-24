<?php
	$conexion= new mysqli("bnb1hokoeb60zcbrc97w-mysql.services.clever-cloud.com", "ufwdfgxut6wqid44", "CSwZTXKB6w36ndX1SuaR", "bnb1hokoeb60zcbrc97w");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	else {
		//printf("Estas conectado");
	}
?>