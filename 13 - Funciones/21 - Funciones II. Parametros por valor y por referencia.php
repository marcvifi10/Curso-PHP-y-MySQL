<html>
	<head>
		<title>Funciones II. Parámetros por valor y por referencia</title>
	</head>
	<body>
		<?php
			function incrementa($valor1)
			{
				$valor1++;
				
				return $valor1;
			}
			
			//& = paramatero por referencia
			// Tambien modifica la variable $numero fuera de la función
			function incrementa2(&$valor2)
			{
				$valor2++;
				
				return $valor1;
			}
			
			$numero=5;
			
			echo incrementa($numero);
			echo "<br>";
			
			
			function cambia_mayusc($param)
			{
				//Pone en mayuculas la primera letra de todas las palabras
				$param=ucwords($param);
				
				return $param;
			}
			
			$cadena="hola que tal?";
			echo cambia_mayusc($cadena);
		?>
	</body>
</html>