<html>
	<head>
		<meta charset="utf-8">
		<title>VISTA</title>
		<style>
			td
			{
				border:1px dotted #FF000;
			}
		</style>
	</head>
	<body>
		<table>
			<tr>
				<td>NOMBRE DEL ARTÍCULO</td>
			</tr>
		<?php
			foreach($matrizProductos as $registro)
			{
				echo "<tr><td>".$registro["nombre"]."</td></tr>";
			}
		?>
		</table>
	</body>
</html>