<?php
	require("conexion.php");
	
	class DevuelveProdutos extends Conexion
	{
		public function DevuelveProdutos()
		{
			// Llamamos al consructor de la clase padre
			parent::construct();
		}
		
		public function get_productos($dato)
		{
			$resultado = "SELECT * FROM PRODUCTOS WHERE PAISORIGEN ='".$dato."'"; 
			
			$sentencia = $this->conexion_db->prepare($sql);
			
			$sentencia->execute(array());
			
			$resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
			
			$sentencia->closeCursor();
			
			return $resultado;
			
			$this->conexion_db=null;
			
			/*$resultado=$this->conexion_db->query('SELECT * FROM PRODUCTOS WHERE PAISORIGEN="'.$dato.'"');
			
			$productos = $resultado->fetch_all(MYSQLI_ASSOC);
			
			return $productos;*/
		}
	}
?>