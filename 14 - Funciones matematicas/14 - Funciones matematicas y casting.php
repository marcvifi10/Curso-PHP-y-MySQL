<html>
	<head>
		<title>Funciones matemáticas y casting</title>
	</head>
	<body>
		<?php
			//Generamos un numero aleatorio entre 1 y 10
			$num1 = rand(1,10);
			echo "El numero es: ".$num1."<br>";
			
			//Redondeamos un numero a 2 decimales
			$num2=5.2534646;
			echo "El numero es: ".round($num2,2)."<br>";
			
			//Convertimos un string a numero
			$num3="3";
			$resultado=(int)$num3;
			echo $num3;
		?>
	</body>
</html>