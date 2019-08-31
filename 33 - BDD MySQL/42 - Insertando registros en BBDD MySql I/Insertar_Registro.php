<html>
	<head>	
		<title>Insertando registros en BBDD MySql</title>
		<?php
			//$busqueda=$_GET["buscar"];
			
			//Guardamos el nombre del host en una variable
			$db_host="localhost";
				
			//Guardamos el nombre de la base de datos en una variable
			$db_name="pruebas";
				
			//Guardamos el nombre del usuario de la base de datos en una variable
			$db_usuario="root";
				
			//Guardamos el nombre de la contraseĂ±a del usuario de la base de datos en una variable
			$db_contra="";
				
			// Guardamos en la variable conexion, toda la conexion
			$conexion = mysqli_connect($db_host,$db_usuario,$db_contra);
				
			// Condicional por si hay algun error en la conexion
			if(mysqli_connect_errno())
			{
				echo "No se ha podido conectar a la base de datos";
					
				exit();
			}
				
			// Guardamos en una variable la conexion a la base de datos
			mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");
			
			// Para que muestre las tildes de las querys
			mysqli_set_charset($conexion,"utf8");
				
			// CARACTERES COMODÍN
			// %caballero = ver todos los resultados que acaban con caballero
			// caballero% = ver todos los resultados que empiezan por caballero
			// SELECT * FROM DATOSPERSONALES WHERE NOMBRE LIKE 'BALON%'
				
			// _ = equivale a todos los valores
			// SELECT * FROM DATOSPERSONALES WHERE NOMBRE LIKE 'CENI_ERO'
				
				
			$consulta = "INSERT INTO PRODUCTOS(CODIGOARTICULO, SECCION, NOMBREARTICULO ) VALUES('AR4', 'DEPORTES', 'RAQUETA DE TENNIS')";
				
			$resultados = mysqli_query($conexion,$consulta);
				
			// Cerramos la conexion
			mysqli_close($conexion);
		?>
	</head>
	<body>
		<?php

		?>
	</body>
</html>