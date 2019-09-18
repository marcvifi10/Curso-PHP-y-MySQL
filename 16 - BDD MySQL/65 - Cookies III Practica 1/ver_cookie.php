<html>
	<head>
		<meta charset="utf-8">
		<title>Práctica</title>
	</head>
	<body>
		<?php
			if(!$_COOKIE["idioma"])
			{
				header("Location:index.php");
			}
			else if($_COOKIE["idioma"]=="es")
			{
				header("Location:spanish.php");
			}
			else if($_COOKIE["idioma"]=="en")
			{
				header("Location:english.php");
			}
		?>
	</body>
</html>