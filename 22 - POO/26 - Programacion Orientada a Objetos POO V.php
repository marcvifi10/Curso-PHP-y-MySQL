<html>
	<head>
		<title>Programacion Orientada a Objetos POO I</title>
	</head>
	<body>
		<?php
			class Coche
			{
				//Atributos privados, para que no se puedan modificar fuera de la clase Coche
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
			
			class Camion extends Coche 
			{
				
				//Constructor
				function Camion()
				{
					$this->ruedas = 8;
					$this->color = "gris";
					$this->motor = 2600;
				}
				
				//Metodos	
				function arrancar()
				{
					//Primero llamamos al metodo de la clase padre
					// y  luego aĂ±adimos otra linea
					parent::arrancar();
					
					echo "Camion arrancado";
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
			
			$camion1->arrancar();
			
			$camion1->girar();
			
			$camion1->frenar();
			
		?>
	</body>
</html>