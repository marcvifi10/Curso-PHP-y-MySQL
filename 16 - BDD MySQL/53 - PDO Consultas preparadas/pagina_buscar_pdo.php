<html>
	<head>
		<title>53</title>
	</head>
	<body>
		<?php
			$busqueda= $_GET["buscar"];
		
			try
			{
				$base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
			
				$base->exec("SET CHARACTER SET utf8");
				
				$sql="SELECT NOMBREARTICULO FROM PRODUCTOS WHERE NOMBREARTICULO = ?";
				
				$resultado=$base->prepare($sql);
				
				$resultado->execute(array($busqueda));
				
				while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
				{
					echo "Nombre: ".$registro["NOMBREARTICULO"]."<br>";
				}
				
				$resultado->closeCursor();
			}
			catch(Exception $e)
			{
				die('Error: '.$e->GetMessage());
			}
			finally
			{
				$base=null;
			}
		?>
	</body>
</html>