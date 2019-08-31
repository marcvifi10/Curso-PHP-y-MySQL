<html>
	<head>
		<title>Flujo de ejecución</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			echo "Este es el primer mensaje <br>";
			
			include("archivo_externo.php");
			
			dameDatos();
			dameDatos();
			dameDatos();
			
			echo "Este es el segundo mensaje <br>";
		?>
	</body>
</html>