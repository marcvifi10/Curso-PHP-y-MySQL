<html>
	<head>
		<meta charset="utf-8">
		<title>Mostrar Blog</title>
	</head>
	<body>
		<h2>Blog</h2>
		<hr/>
		<?php
			$conexion = mysqli_connect("localhost", "user", "1234", "bddBlog");
		
			/* Comprobar conexion */
			if(!$conexion)
			{
				echo "La conexion ha fallado: ".mysqli_error();
				
				exit();
			}
			
			$consulta = "SELECT * FROM CONTENIDO ORDER BY FECHA DESC";
			
			if($resultado=mysqli_query($conexion,$consulta))
			{
				while($registro=mysqli_fetch_assoc($resultado))
				{
					echo "<h3>" . $registro['Titulo'] ."</h3>";
					
					echo "<h4>" . $registro['Fecha'] . "</h4>";
					
					echo "<div style='width:400px'>" . $registro['Comentario'] . "</div><br><br>";
				
					if($registro['Imagen'] != "")
					{
						echo "<img src='imagenes/" . $registro['Imagen'] . "' width='300px' />";
					}
					
					echo "<hr/>";
				}
			}
		?>
	</body>
</html>