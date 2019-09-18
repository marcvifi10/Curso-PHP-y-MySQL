<html>
	<head>
		<title>51</title>
	</head>
	<body>
		<?php
			// host + user + passwd + bdd
			$conexion=new mysqli("localhost","root","","pruebas");
			
			if($conexion->connect_errno)
			{
				echo "Fallo la conexion ".$conexion->connect_errno;
			}
			
			$conexion->set_charset("utf-8");
			
			$sql="SELECT * FROM PRODUCTOS";
			
			$resultados=$conexion->query($sql);
			
			if($conexion->errno)
			{
				die($conexion->error);
			}
			
			while($fila=$resultados->fetch_assoc())
			{
				// Imprime el primer campo ('codigo_articulo') de la primera fila de los resultados
				echo $fila['CODIGOARTICULO']." ";
				// Imprime el segundo campo ('nombre_articulo') de los resultados
				echo $fila['NOMBREARTICULO']." ";
				// Imprime el tercer campo ('pais') de los resultados
				echo $fila['PAISORIGEN'];
				
				echo "<br>";
			}
			
			$conexion->close();
		?>
	</body>
</html>