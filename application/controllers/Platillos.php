<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Platillos extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
        $this->load->model("PermisosydenegacionesModel");
        $this->load->model("PlatillosModel");
    }
    public function index() {
        $Busqueda= $this->input->post('busqueda');
        $menu =         $this->menu();
        $Platillos = $this->busqueda($Busqueda);
        if (empty($Platillos)) {
            $this->layout->view("Busqueda", compact("menu"));
        }
        else{
            $this->layout->view("Busqueda", compact("menu","Platillos"));
        }
    }
	public function busqueda($Busqueda)
	{   
		return $this->PlatillosModel->getPlatillo($Busqueda);
    }
    
    public function menu(){
        return $this->PermisosydenegacionesModel->getPermisos();
    }
    public function platillos(){
        return $this->PlatillosModel->getPlatillos();
    }
}
