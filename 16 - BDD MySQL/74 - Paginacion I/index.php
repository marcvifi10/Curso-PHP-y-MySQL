<html>
	<head>
		<title>PAGINACION</title>
	</head>
	<body>
		<?php
			try
			{
				$base= new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
				
				$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$base->exec("SET CHARACTER SET utf8");
				
				$sql_total="SELECT NOMBRE, SECCION, PRECIO, PAIS FROM PRODUCTOS WHERE SECCION='DEPORTES'";
				
				$resultado=$base->prepare($sql_total);
				
				$resultado->execute(array());
				
				while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
				{
					echo "Nombre: ".$registro["NOMBRE"]."<br>";
					echo "Seccion: ".$registro["SECCION"]."<br>";
					echo "Precio: ".$registro["PRECIO"]."<br>";
					echo "Pais: ".$registro["PAIS"]."<br><br>";
				}
				
				$resultado->closeCursor();
			}
			catch(Exception $e)
			{
				echo "Linea de error ".$e->getLine();
			}
		?>
	</body>
</html>