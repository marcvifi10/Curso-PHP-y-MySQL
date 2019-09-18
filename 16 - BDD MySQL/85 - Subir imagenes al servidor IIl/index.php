<html>
	<head>
		<title>Formulario</title>
	</head>
	<style>
		table
		{
			margin:auto;
			width:450px;
			border: 2px dotted #FF000;
		}
	</style>
	<body>
		<form action="datosImagen.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td><label for="imagen">Imagen:</label></td>
					<td><input type="file" name="imagen" size="20"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center"><input type="submit" value="Enviar Imagen"></td>
				</tr>
			</table>
		</form>
	</body>
</html>