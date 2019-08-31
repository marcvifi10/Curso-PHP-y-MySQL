<html>
	<head>
		<title>Bucles I While y Do While</title>
	</head>
	<body>
		<?php
			$var1=1;
			$var2=1;
			
			while($var1<6)
			{
				echo $var1;
				echo "<br>";
				
				$var1++;
			}
			
			echo "Hemos salido del bucle<br>";
			
			do
			{
				echo $var2;
				$var2++;
			}
			while($var2<6);
		?>
	</body>
</html>