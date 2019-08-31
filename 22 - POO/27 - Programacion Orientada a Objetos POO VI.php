<html>
	<head>
		<title>Programacion Orientada a Objetos POO I</title>
	</head>
	<body>
		<?php
			class Coche
			{
				//Atributos protected, para que no se puedan modificar fuera de la clase Coche, pero si en las clases hijas
				protected $ruedas;
				protected $color;
				protected $motor;
				
				//Constructor
				function Coche()
				{
					$this->ruedas = 4;
					$this->color = "";
					$this->motor = 1600;
				}
				
				//Setter: Modificar
				//Getter: Ver las propiedades de un objeto
				function get_ruedas()
				{
					return $this->ruedas;
				}
				
				function get_motor()
				{
					return $this->motor;
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
				
				function set_color($color)
				{
					$this->color=$color;
					
					echo "El color del coche es ".$this->color.".";
				}
			}
			
			$coche1 = new Coche();
			
			$camion1 = new Camion();
			
			$coche1->arrancar();
			
			echo "El coche tiene ".$coche1->get_ruedas()." ruedas.<br>";
			echo "El camion tiene ".$camion1->get_ruedas()." ruedas.<br>";
			
			echo "El coche tiene el motor ".$coche1->get_motor()."cc.<br>";
			echo "El camion tiene el motor ".$camion1->get_motor()."cc.<br>";
			
			$camion1->set_color("Rojo");
			
			$camion1->arrancar();
			
			$camion1->girar();
			
			$camion1->frenar();
			
		?>
	</body>
</html>