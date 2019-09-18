<?php
	if($_POST["edad_usuario"] < 18)
	{
		echo "Eres menor de edad";
	}
	else
	{
		echo "Eres mayor de edad";
	}
?>