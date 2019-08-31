<?php
	require("DevuelveValores.php");
	
	$pais = $_GET["buscar"];
	
	$productos = new DevuelveValores();
	
	$array_productos = $productos->get_productos($pais);
?>
<html>
	<head>
		<title>58</title>
	</head>
	<body>
		<?php
			foreach($array_productos as $elemento)
			{
				echo $elemento['CODIGOARTICULO']."<br>";
				echo $elemento['NOMBREARTICULO']."<br>";
				echo $elemento['SECCION']."<br>";
				echo $elemento['PRECIO']."<br>";
				echo $elemento['FECHA']."<br>";
				echo $elemento['IMPORTADO']."<br>";
				echo $elemento['PAISORIGEN']."<br><br>";
			}
		?>
	</body>
</html>