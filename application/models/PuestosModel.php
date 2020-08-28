<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PuestosModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
    public function getPuesto()
	{
		return $this->db->query("SELECT * FROM puestos")->result();
	}
}