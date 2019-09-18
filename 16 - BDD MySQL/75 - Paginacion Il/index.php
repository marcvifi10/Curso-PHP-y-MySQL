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
				
				$tamano_paginas = 3;
				
				$pagina = 1;
				
				$empezar_desde = ($pagina-1)*$tamano_paginas;
				
				$sql_total="SELECT NOMBRE, SECCION, PRECIO, PAIS FROM PRODUCTOS WHERE SECCION='DEPORTES'";
				
				$resultado=$base->prepare($sql_total);
				
				$resultado->execute(array());
				
				$num_filas = $resultado->rowCount();
				
				$total_paginas = ceil($num_filas / $tamano_paginas);
				
				echo "Numero de registros de la consulta: ".$num_filas."<br>";
				echo "Mostramos ".$tamano_paginas." registros por pagina.<br>";
				echo "Mostrando la pagina ".$pagina." de ".$total_paginas."<br>";
				
				
				
				$resultado->closeCursor();
				
				$sql_limite = "SELECT NOMBRE, SECCION, PRECIO, PAIS FROM PRODUCTOS WHERE SECCION='DEPORTES' LIMIT $empezar_desde,$tamano_paginas";
			
				$resultado=$base->prepare($sql_limite);
				
				$resultado->execute(array());
				
				while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
				{
					echo "Nombre: ".$registro["NOMBRE"]."<br>";
					echo "Seccion: ".$registro["SECCION"]."<br>";
					echo "Precio: ".$registro["PRECIO"]."<br>";
					echo "Pais: ".$registro["PAIS"]."<br><br>";
				}
			}
			catch(Exception $e)
			{
				echo "Linea de error ".$e->getLine();
			}
		?>
	</body>
</html>