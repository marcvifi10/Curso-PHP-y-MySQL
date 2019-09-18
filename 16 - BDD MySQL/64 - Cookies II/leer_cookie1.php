<html>
	<head>
		<title>Cookies</title>
	</head>
	<body>
		<?php
			if(isset($_COOKIE["prueba"]))
			{
				// Leemos la cookie "prueba"
				echo $_COOKIE["prueba"];
			}
			else
			{
				echo "La cookie ya no existe!!!";
			}
		?>
	</body>
</html>