<?php
	/**
	 * 
	 */
	class Site_model extends CI_Model
	{
		//método para agregar profesores a la base de datos
		public function insertProfesor($nombre,$apellido,$curso){
			$profesor = array(
				"nombre" =>$nombre,
				"apellidos"=>$apellido,
				"curso"=>$curso
			);
			//insertamos los datos a la base de datos
			$this->db->insert("profesores",$profesor);
		}
	}
?>