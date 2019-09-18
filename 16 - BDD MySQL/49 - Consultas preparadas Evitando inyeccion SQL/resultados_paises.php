<html>
	<head>
		<meta charset="utf-8">
		<title>Consultas preparadas</title>
	</head>
	<body>
		<?php
			$pais=$_GET["buscar"];
			
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
			
			mysqli_set_charset($conexion, "utf-8");
			
			//Metodo 3 - Para evitar la inyección 
			
			$sql="SELECT CODIGOARTICULO, SECCION, PRECIO, PAISORIGEN FROM PRODUCTOS WHERE PAISORIGEN= ?";
			
			$resultado=mysqli_prepare($conexion,$sql);
			
			$ok=mysqli_stmt_bind_param($resultado, "s", $pais);
			
			$ok=mysqli_stmt_execute($resultado);
			
			if($ok==false)
			{
				echo "Error al ejecutar la consulta!!!";
			}
			else
			{
				$ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);
				
				echo "Articulos encontrados: <br><br>";
				
				while(mysqli_stmt_fetch($resultado))
				{
					echo $codigo." ".$seccion." ".$precio." ".$pais." <br>";
				}
				
				mysqli_stmt_close($resultado);
			}
		?>
	</body>
</html>