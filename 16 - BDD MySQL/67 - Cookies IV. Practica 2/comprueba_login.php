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
						header("Location:login.php");
						
						echo "Error. Usuario o contraseña incorrectos.";
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
				echo "Usuario: ".$_SESSION["usuario"];
			}
			
			if(isset($_COOKIE["nombre_usuario"]))
			{
				echo "¡Hola ".$_COOKIE["nombre_usuario"]."!";
			}
			else if($autenticar==true)
			{
				echo "¡Hola ".$_POST["login"]."!";
			}
		?>
		
		<h2>CONTENIDO DE LA WEB</h2>
		<?php
			if($autenticar==true || isset($_COOKIE["nombre_usuario"]))
			{
				include("zona_registrados.html");
			}
		?>
	</body>
</html>