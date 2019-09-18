<html>
	<head>
		<title>Declaracion de constantes</title>
	</head>
	<body>
		<?php
			//define(nombre_variable,valor_variable,no_sea_sensible_mayusculas_nombre_variable)
			define("AUTOR","Marc",true);
			
			echo "El autor es: ".AUTOR;
			
			echo "<br>";
			
			//EJEMPLO CONSTANTES PREDIFINIDAS DE PHP
			//Mostramos por pantalla, en que linea está esta instrucción
			echo "La linea de esta instruccion es: ".__LINE__;
		?>
	</body>
</html>