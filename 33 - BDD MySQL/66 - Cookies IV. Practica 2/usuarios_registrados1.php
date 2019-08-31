<html>
	<head>
		<title>USUARIOS REGISTRADOS</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			session_start();
			
			if(!isset($_SESSION["usuario"]))
			{
				header("Location:login.php");
			}
		?>
	
		<h1>BIENVENIDOS USUARIOS!!!</h1>
		
		<?php
			echo "Hola ".$_SESSION["usuario"].".<br><br>";
		?>
		<p>Esto es información confidencial</p>
		<br><br>
		<input type="button" action="cierre.php">
	</body>
</html>