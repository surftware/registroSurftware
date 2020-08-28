<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PermisosydenegacionesModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function getPermisos()
	{	
		//if (isset($this->session->userdata('perfil'))) 
		$perfil = $this->session->userdata('perfil');
		return $this->db->query(
		"SELECT * FROM permisosydenegaciones INNER JOIN modulos ON permisosydenegaciones.Permisos_Modulo = modulos.Modulo_Id WHERE Permisos_Activo = '1' AND Permisos_Perfil = '".$perfil."';")->result();
	}
}
