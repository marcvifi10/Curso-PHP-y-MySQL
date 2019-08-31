<html>
	<head>
		<title>Cookies</title>
	</head>
	<body>
		<?php
			setcookie("prueba","Esta es la informacion de nuestra primera cookie.",time()+30,"directorio_donde_encuentran_la_cookie");
			// Para eliminar una cookie ya creada, le ponemos un tiempo de vida negativo
		?>
	</body>
</html>