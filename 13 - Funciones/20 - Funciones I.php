<html>
	<head>
		<title>Funciones I</title>
	</head>
	<body>
		<?php
			$palabra="MARC";
			echo(strtolower($palabra));
			echo "<br>";
			
			$palabra2="real sociedad";
			echo(strtoupper($palabra2));
			echo "<br>";
			
			function suma($num1,$num2)
			{
				echo "La suma es: ".($num1+$num2);
			}
			
			suma(1,2);
			
		?>
	</body>
</html>