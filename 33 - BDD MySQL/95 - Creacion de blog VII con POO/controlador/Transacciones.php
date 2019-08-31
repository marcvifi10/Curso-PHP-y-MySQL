<html>
	<head>
	
	</head>
	<body>
		<?php
		
			include("../modelo/Objeto_Blog.php");
			
			include("../modelo/Manejo_Objetos.php");
			
			try
			{
				$conexion = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
			
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				if($_FILES['imagen']['error'])
				{
					switch($_FILES['imagen']['error'])
					{
						case 1: 
							echo "El tamaño del archivo excede lo permitido por el servidor.";
						break;
					
						case 2:
							echo "El tamaño de archivo excede 2 MB.";
						break;
					
						case 3:
							echo "El envio de archivo se interrumpió.";
						break;
					
						case 4:
							echo "No se ha subido ningún fichero.";
						break;
					}
				}
				else
				{
					echo "Entrada subida correctamente.<br>";
				
					if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK)))
					{
						$destino_de_ruta="imagenes/";
					
						move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
					
						echo "El archivo " . $_FILES['imagen']['name'] . "Se ha copiado en el directorio de imagenes.";
					}
					else
					{
						echo "El archivo no se ha podido copiar en el directorio de imagenes";
					}
				}

				$Manejo_Objetos = new Manejo_Objetos($conexion);
				
				$blog = new Objeto_Blog();
				
				$blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
				
				$blog->setFecha(Date("Y-m-d H:i:s"));
				
				$blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
			
				$blog->setImagen($_FILES["imagen"]["name"]);
				
				$Manejo_Objetos->insertaContenido($blog);
				
				echo "<br>Entrada de blog agregada con exito<br>";
				
			}
			catch(Exception $e)
			{
				die("Error: " . $e->getMessage());
			}	
			
		?>
	</body>
</html>