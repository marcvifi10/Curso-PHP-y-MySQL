<?php
	class Conexion
	{
		protected $conexion_db;
		
		public function Conexion()
		{
			$this->conexion_db = new mysqli("localhost", "root", "", "pruebas");
			
			if($this->conexion_db->connect_errno)
			{
				echo "Fallo al connectar ".$this->conexion_db->connect_error;
				return;
			}
			
			$this->conexion_db->set_charset("utf8");
		}
	}

?>