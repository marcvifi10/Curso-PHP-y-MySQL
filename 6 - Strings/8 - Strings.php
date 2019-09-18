<html>
	<head>
		<title>Strings</title>
		<style>
			.parrafo
			{
				color: #F00;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<?php
			$nombre="Marc";
			$nombre2="Alex";
			
			echo $nombre;
		
			echo "<p class='parafo'>Esto es un ejemplo</p>";
			echo "<br>";
			echo "Hola $nombre<br>";
			
			//Comparamos los dos strings (1=no son iguales, 0=iguales)
			$resultado=strcmp($nombre,$nombre2);
			
			echo "$resultado";
		?>
	</body>
</html>