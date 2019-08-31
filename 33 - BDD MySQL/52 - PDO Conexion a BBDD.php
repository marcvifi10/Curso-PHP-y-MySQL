<html>
	<head>
		<title>52</title>
	</head>
	<body>
		<?php
			try
			{
				// host, user, passwd
				$base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', ''); 
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