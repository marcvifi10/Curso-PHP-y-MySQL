<html>
	<head>
		<title>BBDD MySql</title>
	</head>
	<body>
		<?php
			$busqueda=$_GET["buscar"];
		
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
			
			
			$consulta = "SELECT * FROM DATOSPERSONALES WHERE NOMBRE LIKE '%$busqueda%'";
			
			$resultados = mysqli_query($conexion,$consulta);
			
			// Imprimimos todos los resultados i/o filas de la consulta
			while(($fila=mysqli_fetch_array($resultados,MYSQL_ASSOC))==true)
			{	
				// Imprime el primer campo ('codigo_articulo') de la primera fila de los resultados
				echo $fila['NOMBRE']." ";
				// Imprime el segundo campo ('nombre_articulo') de los resultados
				echo $fila['APELLIDO']." ";
				// Imprime el tercer campo ('pais') de los resultados
				echo $fila['EDAD'];
				
				echo "<br>";
			}
			
			// Cerramos la conexion
			mysqli_close($conexion);
		?>
	</body>
</html>