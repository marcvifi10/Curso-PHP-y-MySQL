<html>
	<head>
		<title>Arrays III</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			// array unidimensional
			$alimentos=array("fruta","leche","carne");
			
			// array bidimensional
			$alimentos2=array("fruta"=>array("tropical"=>"kiwi",
											 "citrico"=>"naranja",
											 "otros"=>"manzana"),
							  "leche"=>array("animal"=>"vaca",
											 "vegetal"=>"coco"),
							  "carne"=>array("vacuno"=>"lomo",
											 "cerdo"=>"pata"));
			
			echo $alimentos2["carne"]["vacuno"];
			
			echo "<br>";
			
			foreach($alimentos2 as $clave_alim=>$alim)
			{
				echo "$clave_alim:<br>";
				
				while(list($clave,$valor)=each($alim))
				{
					echo "$clave=$valor<br>";
				}
				
				echo "<br>";
			}
		?>
	</body>
</html>