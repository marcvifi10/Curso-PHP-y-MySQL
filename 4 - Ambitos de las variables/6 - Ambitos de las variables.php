<html>
	<head>
		<title>Ambitos de las variables</title>
	</head>
	<body>
		<?php
			$nombre="Marc";
			
			include("6 - Ambitos_de_las_variables2.php");
			
			dameNombre();
			
			function dameNombre2()
			{
				//Convertimos a la variable nombre en una variable global
				global $nombre;
				
				$nombre="El nombre es ".$nombre;
				
			}
			
			echo $nombre."<br>";
			dameNombre2();
			
			
		?>
	</body>
</html>