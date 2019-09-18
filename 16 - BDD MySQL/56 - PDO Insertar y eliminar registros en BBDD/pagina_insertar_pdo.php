<html>
	<head>
		<title>56</title>
	</head>
	<body>
		<?php
			$busqueda_cart= $_POST["c_art"];
			$busqueda_seccion= $_POST["seccion"];
			$busqueda_nart= $_POST["n_art"];
			$busqueda_precio= $_POST["precio"];
			$busqueda_fecha= $_POST["fecha"];
			$busqueda_importado= $_POST["importado"];
			$busqueda_porig= $_POST["p_orig"];
			
			try
			{
				$base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
			
				$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				$base->exec("SET CHARACTER SET utf8");
				
				//$sql="SELECT nombre FROM PRODUCTOS WHERE SECCION = :SECC AND PAISORIGEN= :PORIG";
				
				$sql = "INSERT INTO PRODUCTOS(CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISORIGEN) VALUES(:c_art, :seccion, :n_art, :precio, :fecha, :importado, :p_orig)";
				
				$resultado=$base->prepare($sql);
				
				//$resultado->execute(array(":SECC"=>$busqueda_sec, ":PORIG"=>$busqueda_porig));
				
				$resultado->execute(array(":c_art"=>$busqueda_cart, ":seccion"=>$busqueda_seccion, ":n_art"=>$busqueda_nart, ":precio"=>$busqueda_precio, ":fecha"=>$busqueda_fecha, ":importado"=>$busqueda_importado, ":p_orig"=>$busqueda_porig));
				
				/*while($registro=$resultado->fetch(PDO::FETCH_ASSOCC))
				{
					echo "Nombre ".$registro["nombre"];
				}*/
				
				echo "Registro insertado!!!";
				
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