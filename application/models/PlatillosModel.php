<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PlatillosModel extends CI_Model
{
	function __construct()
	{
		
		parent::__construct();
	}
    public function getPlatillo($patron){ 
		return 
		$this->db->query(
			"SELECT * FROM platillos WHERE Platillos_Nombre LIKE '%".$patron."%';"
		)->result(); 
	}
}