<html>
	<head>
		<title>Arrays II</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			//
			$datos=array("Nombre"=>"Marc","Apellido"=>"Villalobos","Edad"=>22);
			
			foreach($datos as $clave=>$valor)
			{
				echo "A $clave le corresponde $valor <br>";
			}
			
			
			
			//
			$semana[]="Lunes";
			$semana[]="Martes";
			$semana[]="Miercoles";
			$semana[]="Jueves";
			
			echo "<br>";
			
			for($i=0;$i<=count($semana);$i++)
			{
				echo $semana[$i]."<br>";
			}
			
			//Agregar un elemento en un array, al final de este
			$semana[]="Viernes";
			
			
			
			//Agregar un elemento a un array asociativo
			$datos=array("Nombre"=>"Marc","Apellido"=>"Villalobos","Edad"=>22);
			
			$datos["Pais"]="España";
			
			
			
			//Ordenar los elementos de un array
			sort($semana);
			
			for($i=0;$i<count($semana);$i++)
			{
				echo $semana[$i]."<br>";
			}
		
			
		?>
	</body>
</html>