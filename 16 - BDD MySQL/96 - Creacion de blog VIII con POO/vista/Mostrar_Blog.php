<html>
	<head>
		<meta charset="utf-8">
		<title>Mostrar Blog</title>
	</head>
	<body>
		<h2>Blog</h2>
		<hr/>
		<?php
			
			include("../modelo/Manejo_Objetos.php");
		
			try
			{
				$conexion = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
			
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$Manejo_Objetos = new Manejo_Objetos($conexion);
				
				$tabla_blog = $Manejo_Objetos->getContenidoPorFecha();
				
				if(empty($tabla_blog))
				{
					echo "No hay entradas de blog aun";
				}
				else
				{
					foreach($tabla_blog as $valor)
					{
						echo "<h3>" . $valor->getTitulo() . "</h3><br>";
						
						echo "<h4>" . $valor->getFecha() . "</h4><br>";
						
						echo "<div atyle='width:400px'>";

						echo $valor->getComentario() . "</div>";
						
						if($valor->getImagen() != "")
						{
							echo "<img src='../imagenes/";

							echo $valor->getImagen() . "' width='300px' height='200px'/>";
							
						}
						
						echo "<hr/>";
						
					}
				}
				
			}
			catch(Exception $e)
			{
				die("Error: " . $e->getMessage());
			}	
		?>
		
		<br/>
		
		<a href="Formulario.php"> Volver a la página de inserción</a>
		
	</body>
</html>