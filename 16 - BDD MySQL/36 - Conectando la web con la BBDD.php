<html>
	<head>
		<title>BBDD MySql</title>
	</head>
	<body>
		<?php
			//Guardamos el nombre del host en una variable
			$db_host="localhost";
			
			//Guardamos el nombre de la base de datos en una variable
			$db_name="pruebas";
			
			//Guardamos el nombre del usuario de la base de datos en una variable
			$db_usuario="root";
			
			//Guardamos el nombre de la contraseña del usuario de la base de datos en una variable
			$db_contra="";
			
			$conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_name);
			
			$consulta = "SELECT * FROM DATOSPERSONALES";
			
			$resultados = mysqli_query($conexion,$consulta);
			
			// Mira fila a fila lo que hay almacenado en $resultados
			$fila = mysqli_fetch_row($resultados);
			
			// Imprime el primer campo de la primera fila de los resultados
			echo $fila[0]." ";
			// Imprime el segundo campo de la primera fila de los resultados
			echo $fila[1]." ";
			// Imprime el tercer campo de la primera fila de los resultados
			echo $fila[2];
		?>
	</body>
</html>