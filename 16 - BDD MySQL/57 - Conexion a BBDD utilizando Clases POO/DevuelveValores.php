<?php
	require("conexion.php");
	
	class DevuelveValores extends Conexion
	{
		public function DevuelveValores()
		{
			// Llamamos al consructor de la clase padre
			parent::__construct();
		}
		
		public function get_productos()
		{
			$resultado=$this->conexion_db->query("SELECT * FROM PRODUCTOS");
			
			$productos = $resultado->fetch_all(MYSQLI_ASSOC);
			
			return $productos;
		}
	}
?>