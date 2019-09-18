<html>
	<head>
		<title>Programacion Orientada a Objetos POO I</title>
	</head>
	<body>
		<?php
			class Coche
			{
				var $ruedas;
				var $color;
				var $motor;
				
				//Constructor
				function Coche()
				{
					$this->ruedas = 4;
					$this->color = "";
					$this->motor = "";
				}
				
				function arrancar()
				{
					echo "Estoy arrancando!!!";
				}
				
				function girar()
				{
					echo "Estoy girando!!!";
				}
				
				function frenar()
				{
					echo "Estoy frenando!!!";
				}
			}
			
			$coche1 = new Coche();
			
			$coche1->arrancar();
			
			echo $coche1->ruedas;
			
		?>
	</body>
</html>