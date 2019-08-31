<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>INTRODUCE TUS DATOS</h1>
		<form action="comprueba_login.php" method="post">
			<table>
				<tr>
					<td class="izq">Login:</td>
					<td class="der"><input type="text" name="login"></td>
				</tr>
				<tr>
					<td class="izq">Contraseña:</td>
					<td class="der"><input type="password" name="password"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td>
				</tr>
			</table>
		</form>
	</body>
</html>