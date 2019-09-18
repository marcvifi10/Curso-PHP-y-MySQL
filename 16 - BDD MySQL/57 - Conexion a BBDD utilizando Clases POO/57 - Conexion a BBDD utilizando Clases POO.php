<?php
	require("DevuelveValores.php");
	
	$productos = new DevuelveValores();
	
	$array_productos = $productos->get_productos();
?>
<html>
	<head>
		<title>57</title>
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