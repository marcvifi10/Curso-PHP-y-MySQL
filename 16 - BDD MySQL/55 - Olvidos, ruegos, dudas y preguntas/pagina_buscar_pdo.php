<html>
	<head>
		<title>55</title>
	</head>
	<body>
		<?php
			$busqueda_sec= $_GET["seccion"];
			$busqueda_porig= $_GET["p_orig"];
			
			try
			{
				$base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
			
				$base->exec("SET CHARACTER SET utf8");
				
				$sql="SELECT NOMBREARTICULO FROM PRODUCTOS WHERE SECCION = :SECC AND PAISORIGEN= :PORIG";
				
				$resultado=$base->prepare($sql);
				
				$resultado->execute(array(":SECC"=>$busqueda_sec, ":PORIG"=>$busqueda_porig));
				
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