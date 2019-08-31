<html>
	<head>
		<title>Comprueba login</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$autenticar=false;
		
			if(isset($_POST["enviar"]))
			{
				try
				{
					$base = new PDO("mysql:host=localhost; dbname=pruebas","root","");
					
					$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
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
						$autenticar=true;
						
						if(isset($_POST["recordar"]))
						{
							setcookie("nombre_usuario",$_POST["login"],time()+86400);
							
						}
					}
					else
					{
						// header("Location:login.php");
						
						echo "Error. Usuario o contraseña incorrectos.";
						
						header("Location:login.php");
					}
				}
				catch(Exception $e)
				{
					die("Error: ".$e->getMessage());
				}
			}
		?>
		<?php
			if($autenticar==false)
			{
				if(!isset($_COOKIE["nombre_usuario"]))
				{
					include("login.php");
				}
			}
			else
			{
				//echo "Usuario: ".$_SESSION["usuario"];
			}
		?>
		<h2>CONTENIDO DE LA WEB</h2>
	</body>
</html>