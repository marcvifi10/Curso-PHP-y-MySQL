<html>
	<head>
	
	</head>
	<body>
		<?php
			$conexion = mysqli_connect("localhost","user","1234");
	
			if(mysqli_connect_errno())
			{
				echo "Fallo al conectar con la BDD";
				exit();
			}
	
			mysqli_select_db($conexion,"prueba");
	
			mysqli_set_charset($conexion,"utf8");
			
			$consulta="SELECT FOTO FROM PRODUCTOS WHERE CODIGOARTICULO='AR01'";
			
			$resultado=mysqli_query($conexion,$consulta);
			
			while($fila=mysqli_fetch_array($resultado))
			{
				$ruta_img=$fila["FOTO"];
				
			}
		?>
		<div>
			<img src="/intranet/uploads/<?php echo $ruta_img;?>" alt="Imagen del primer articulo" width="25%">
		</div>
	</body>
</html>