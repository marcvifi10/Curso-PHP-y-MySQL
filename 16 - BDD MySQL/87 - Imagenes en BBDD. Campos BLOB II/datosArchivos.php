<?php

	// Recibimos los datos del archivo
	
	$nombre_archivo = $_FILES['archivo']['name'];
	
	$tipo_archivo = $_FILES['archivo']['type'];
	
	$tamano_archivo = $_FILES['archivo']['size'];
	
	// echo $_FILES['imagen']['size']." bytes";
	// echo $tipo_imagen;
	
	// tamaño en bytes
	if($tamano_archivo<=3000000)
	{
		// ruta de la carpeta destino en servidor /intranet/uploads
		$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/intranet/uploads';
	
		// Movemos el archivo del directorio temporal al directorio escogido
		move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombre_archivo);
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
	
	mysqli_select_db($conexion,"pruebas") or die ("No se encuentra la BDD");
	
	mysqli_set_charset($conexion,"utf8");
	
	
	$archivo_objetivo = fopen($carpeta_destino . $nombre_archivo, "r");
	
	$contenido = fread($archivo_objetivo, $tamano_archivo);
	
	$contenido = addslashes($contenido);
	
	fclose($archivo_objetivo);
	
	
	$sql="INSERT INTO ARCHIVOS (ID, NOMBRE, TIPO, CONTENIDO) VALUES (0, '$nombre_archivo', '$tipo_archivo', '$contenido')";
	
	$resultado=mysqli_query($conexion,$sql);
	
	
	if(mysqli_affected_rows($conexion) > 0)
	{
		echo "Se ha insertado el registro con exito";
	}
	else
	{
		echo "No se ha podido insertar el registro!!!";
	}
?>