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
		<form action="datosArchivos.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td><label for="imagen">Imagen:</label></td>
					<td><input type="file" name="archivo" size="20"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center"><input type="submit" value="Enviar Archivo"></td>
				</tr>
			</table>
		</form>
	</body>
</html>