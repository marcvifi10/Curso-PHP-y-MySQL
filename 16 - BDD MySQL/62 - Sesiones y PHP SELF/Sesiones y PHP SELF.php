<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			if(isset($_POST["enviar"]))
			{
				try
				{
					$base = new PDO("mysql:host=localhost; dbname=prueba","root","1234");
					
					$base->setAttribute(PDO::ATTR_MODE, PDO:ERRMODE:EXCEPTION);
					
					$sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS=:login AND PASSWORD=:password";
				
					$resultado = $base->prepare($sql);
					
					// Convertir cualquier simbolo en html
					$login = htmlentities(addslashes($_POST["login"]));
					
					$password = htmlentities(addslashes($_POST["password"]));
					
					$resultado->bindValue(":login",$login);
					
					$resultado->bindValue(":password",$password);
					
					$resultado->execute();
					
					$numero_registro = $resultado->rowCount();
					
					if($numero_registro != 0)
					{
						session_start();
						
						$_SESSION["usuario"]=$_POST["login"];
						
						//header("Location:usuarios_registrados1.php");
					}
					else
					{
						//header("Location:login.php");
						
						echo "Usuario o contraseña incorrectos!!!";
					}
				}
				catch(Exception $e)
				{
					die("Error: ".$e->getMessage());
				}
			}
		?>
		<?php
			if(!isset($_SESSION["usuario"]))
			{
				include("formulario.html");
			}
			else
			{
				echo "Usuario: ".$_SESSION["usuario"];
			}
		?>	
	</body>
</html>