<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class LoginController extends CI_Controller {
        function __construct()
	    {
            parent::__construct();
            $this->load->model("LoginModel");        
	    }
        public function index(){
            echo '<h1>Bienvenido al controlador login:</h1>';
            $data=$this->verificaDatos();
        }
        public function verificaDatos(){
            //$this->session->sess_destroy();
            $Nombre= $this->input->post('usuario');
            $Pass= $this->input->post('password');
            $data=$this->retornaDatosMysql($Nombre,$Pass);
            if (is_array($data)){
                $this->session->set_userdata($data);
                header('Location:'. base_url()."index.php/".$this->session->userdata('Index'));
            }else{
                $this->session->sess_destroy();
                header("Location:".base_url()."index.php/Inicio/UsuarioIncorrecto");
            }
        }
        public function retornaDatosMysql($Nombre,$Pass){
            $fila= $this->LoginModel->getUsuario($Nombre);
            if ($fila != null) {
                if ($fila->Usuario_Password == $Pass) {
                    $data = array(
                        'Id' => $fila->Usuario_Id,
                        'Nombre'=>$fila->Usuario_Nombre,
                        'Pass'=>$fila->Usuario_Password, 
                        'perfil'=>$fila->Perfil_Id,
                        'NombrePerfil'=>$fila->Perfil_Nombre,
                        'Index'=>$fila->Perfil_Index,
                        'login'=> TRUE
                    );                 
                    return $data;
                }else{
                    header("Location:".base_url()."index.php/Inicio/UsuarioIncorrecto");
                }
            }else{
                header("Location:".base_url()."index.php/Inicio/UsuarioIncorrecto");
            }
        }
    }
?>