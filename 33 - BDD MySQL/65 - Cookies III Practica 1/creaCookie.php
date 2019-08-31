<html>
	<head>
		<meta charset="utf-8">
		<title>Práctica</title>
	</head>
	<body>
		<?php
			setcookie("idioma",$_GET["idioma"],time()+86400);
			
			header("Location:ver_cookie.php");
		?>
	</body>
</html>