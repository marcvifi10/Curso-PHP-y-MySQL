<html>
	<head>	
		<title>Insertando registros en BBDD MySql</title>
		<?php
			
		?>
	</head>
	<body>
		<?php
			$cod = $_GET["c_art"];
			
			$sec = $_GET["seccion"];
			
			$nom = $_GET["n_art"];
			
			$fec = $_GET["fecha"];
			
			$pre = $_GET["precio"];
			
			$imp = $_GET["importado"];
			
			$por = $_GET["p_orig"];
		
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
				
				
			$consulta = "INSERT INTO productos(CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISORIGEN) VALUES('$cod', '$sec', '$nom', '$pre', '$fec', '$imp', '$por')";
				
			$resultados = mysqli_query($conexion, $consulta);
				
			if($resultados==false)
			{
				echo "ERROR EN LA CONSULTA!!!";
			}
			else
			{
				echo "REGISTRO GUARDADO!!!<br><br>";
				
				echo "<table><tr><td>$cod</td></tr>";
				
				echo "<tr><td>$sec</td></tr>";
				
				echo "<tr><td>$nom</td></tr>";
				
				echo "<tr><td>$pre</td></tr>";
				
				echo "<tr><td>$fec</td></tr>";
				
				echo "<tr><td>$cod</td></tr>";
				
				echo "<tr><td>$imp</td></tr>";
				
				echo "<tr><td>$por</td></tr></table>";
			}
			
			// Cerramos la conexion
			mysqli_close($conexion);
		?>
	</body>
</html>