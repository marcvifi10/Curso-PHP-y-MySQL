<?php
	require("conexion.php");
	
	class DevuelveProdutos extends Conexion
	{
		public function DevuelveProdutos()
		{
			// Llamamos al consructor de la clase padre
			parent::construct();
		}
		
		public function get_productos()
		{
			$resultado=$this->conexion_db->query("SELECT * FROM PRODUCTOS");
			
			$productos = $resultado->fetch_all(MYSQLI_ASSOC);
			
			return $productos;
		}
	}
?>