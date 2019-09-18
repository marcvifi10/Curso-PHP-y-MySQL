<?php

	// Recibimos los datos de la imagen
	
	$nombre_imagen = $_FILES['imagen']['name'];
	
	$tipo_imagen = $_FILES['imagen']['type'];
	
	$tamano_imagen = $_FILES['imagen']['size'];
	
	echo $_FILES['imagen']['size']." bytes";
	
	// ruta de la carpeta destino en servidor /intranet/uploads
	$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/intranet/uploads/';
	
	// Movemos la imagen del directorio temporal al directorio escogido
	
	move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);

	
?>