<html>
	<head>
		<title>Variables estáticas</title>
	</head>
	<body>
		<?php
			function incrementarVariable()
			{
				static $contador=0;
				
				$contador++;
				
				echo "$contador";
				echo "<br>";
			}
			
			incrementarVariable();
			incrementarVariable();
			incrementarVariable();
			incrementarVariable();
		?>
	</body>
</html>