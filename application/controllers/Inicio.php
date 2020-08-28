<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->model("PermisosydenegacionesModel");
	}
	public function pruebas()
	{	echo "hola mundo!";
	}
	public function index()
	{	
		$this->session->userdata('login') == FALSE;
		$this->session->sess_destroy();
		$this->salir();
	}
	public function salir(){
		$this->layout->view("login");
	}
	public function pendiente(){
		$menu= $this->PermisosydenegacionesModel->getPermisos();
		$this->layout->view("EnConstruccion", compact("menu"));
	}
	public function UsuarioIncorrecto(){
		$this->layout->view("404");
	}
	public function error()
	{	
		
		$this->layout->view("404");
	}
	public function blank()
	{
		
		$this->layout->view("blank");
	}
	public function charts()
	{
		
		$this->layout->view("charts");
	}
	public function tables()
	{
		
		$this->layout->view("tables");
	}
	public function Ejemplos_bootstrap(){
		
		$this->layout->view("bootstrap");
		
	}
	public function formularios(){
		
		$attributos = array('class' => '', 'id' => 'myform');
		$nombre= array(
			'name'=>'nombre',
			'placeholder'=>'nombre',
			'type'=>'text',
			'class'=>'form-control-plaintext',
			'id'=>'staticEmail2',
			'value'=>'email@example.com'
			
		);
		$videos= array(
			'name'=>'videos',
			'placeholder'=>'videos',
			'type'=>'text',
			'class'=>'form-control-plaintext',
			'id'=>'inputPassword2',
			'placeholder'=>'Password'
		);
		$boton=array('class'=>'btn btn-primary mb-2');
		$label= array('class'=>'col-sm-2 col-form-label');
		$this->layout->view("formularios", compact("Puesto","attributos","nombre","videos","boton","label"));
	}
	public function ReciveDatosformularios(){
		echo  $this->input->post("nombre");
		echo "<br>";
		echo  $this->input->post("videos");
	}

}
