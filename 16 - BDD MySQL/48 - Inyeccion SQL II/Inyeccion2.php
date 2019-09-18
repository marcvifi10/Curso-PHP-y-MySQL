<html>
	<head>	
		<title>Inyeccion II</title>
	</head>
	<body>
		<?php		
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
			
			// Para evitar la inyección SQL
			$usuario=mysqli_real_escape_string($conexion, $_GET["usu"]);
			$contra=mysqli_real_escape_string($conexion, $_GET["con"]);
			
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
			
			$consulta="DELETE FROM USUARIOS WHERE USUARIO='$usuario' AND CONTRA='$contra'";
		
			echo "$consulta<br><br>";
			
			mysqli_query($conexion, $consulta);
			
			if(mysqli_affected_rows($conexion)>0)
			{
				echo "Baja procesada!!!";
			}
			else
			{
				echo "No se ha econtrado el usuario!!!";
			}
			
			/*if(mysqli_query($conexion,$consulta))
			{
				echo "Baja procesada";
			}*/
		?>
	</body>
</html>