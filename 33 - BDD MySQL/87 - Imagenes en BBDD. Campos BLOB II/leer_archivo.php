<html>
	<head>
	
	</head>
	<body>
		<?php
			$Id = "";
			
			$contenido = "";
			
			$tipo = "";
			
		
			$conexion = mysqli_connect("localhost","user","1234");
	
			if(mysqli_connect_errno())
			{
				echo "Fallo al conectar con la BDD";
				exit();
			}
	
			mysqli_select_db($conexion,"prueba");
	
			mysqli_set_charset($conexion,"utf8");
			
			$consulta="SELECT * FROM ARCHIVOS WHERE ID=4";
			
			$resultado=mysqli_query($conexion,$consulta);
			
			while($fila=mysqli_fetch_array($resultado))
			{
				$Id = $fila["Id"];
				
				$contenido = $fila["Contenido"];
				
				$tipo = $fila["Tipo"];
			}
			
			echo "Id: ".$Id."<br>";
			
			echo "Tipo: ".$tipo."<br>";
			
			echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "'>"."<br>";
		?>
		<div>
			
		</div>
	</body>
</html>