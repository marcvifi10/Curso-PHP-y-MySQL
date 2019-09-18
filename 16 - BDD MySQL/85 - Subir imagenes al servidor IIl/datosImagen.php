<?php

	// Recibimos los datos de la imagen
	
	$nombre_imagen = $_FILES['imagen']['name'];
	
	$tipo_imagen = $_FILES['imagen']['type'];
	
	$tamano_imagen = $_FILES['imagen']['size'];
	
	// echo $_FILES['imagen']['size']." bytes";
	// echo $tipo_imagen;
	
	// tamaño en bytes
	if($tamano_imagen<=3000000)
	{
		if($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif")
		{
			// ruta de la carpeta destino en servidor /intranet/uploads
			$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/intranet/uploads';
	
			// Movemos la imagen del directorio temporal al directorio escogido
			move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
		}
		else
		{
			echo "Solo se pueden subir imagenes!!!";
		}
	}
	else
	{
		echo "El tamaño es demasiado grande!!!";
	}
	
	
	$conexion = mysqli_connect("localhost","root","");
	
	if(mysqli_connect_errno())
	{
		echo "Fallo al conectar con la BDD";
		exit();
	}
	
	mysqli_select_db($conexion,"prueba");
	
	mysqli_set_charset($conexion,"utf8");
	
	$sql="INSERT INTO PRODDUCTOS2(FOTO) VALUES ('$nombre_imagen') WHERE CODIGOARTICULO='1'";
	
	$resultado=mysqli_query($conexion,$sql);
?>