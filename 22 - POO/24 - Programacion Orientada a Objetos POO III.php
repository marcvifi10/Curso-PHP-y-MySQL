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
					$this->motor = 1600;
				}
				
				//Metodos
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
				
				function establece_color($color)
				{
					$this->color=$color;
					
					echo "El color del coche es ".$this->color.".";
				}
			}
			
			class Camion
			{
				var $ruedas;
				var $color;
				var $motor;
				
				//Constructor
				function Camion()
				{
					$this->ruedas = 8;
					$this->color = "";
					$this->motor = 2600;
				}
				
				//Metodos
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
				
				function establece_color($color)
				{
					$this->color=$color;
					
					echo "El color del coche es ".$this->color.".";
				}
			}
			
			$coche1 = new Coche();
			
			$camion1 = new Camion();
			
			$coche1->arrancar();
			
			echo "El coche tiene ".$coche1->ruedas." ruedas.<br>";
			echo "El camion tiene ".$camion1->ruedas." ruedas.<br>";
			
			$coche1->establece_color("Rojo");
			
		?>
	</body>
</html>