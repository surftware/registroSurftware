<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surftwarelanding extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
	}
	//vistas
	public function index()
	{	
		//echo "hola mundo!";
		$this->load->view('surftwarelanding/index');
	}
	public function servicios(){
		$this->load->view('surftwarelanding/servicios');
	}
	//acciones ajax
	public function enviarMail($archivo,$nombre,$telefono,$correo,$direccion,$texto){
		$remitente = $correo;
		$destinatario = 'surftware@gmail.com'; // en esta línea va el mail del destinatario.
		$asunto = 'Consulta desde Surftware'; // acá se puede modificar el asunto del mail
			if (!$_POST){}
			else{
				$cuerpo =  "Name: " . $nombre . "\r\n"; 
				$cuerpo .= "Phone: " . $telefono . "\r\n";
				$cuerpo .= "Email: " . $correo . "\r\n";
				$cuerpo .= "Message: " . $texto . "\r\n";
					//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
					// Si se agrega un campo al formulario, hay que agregarlo acá.
	
				$headers  = "MIME-Version: 1.0\n";
				$headers .= "Content-type: text/plain; charset=utf-8\n";
				$headers .= "X-Priority: 3\n";
				$headers .= "X-MSMail-Priority: Normal\n";
				$headers .= "X-Mailer: php\n";
				$headers .= "From: \"".$_POST['nombre']."\" <".$remitente.">\n";
				mail($destinatario, $asunto, $cuerpo, $headers);
			}
	}
	public function is_valid_email($str)
	{
	  return (false !== strpos($str, "@") && false !== strpos($str, "."));
	}
	public function validacion(){
		$acceso = "";   
		$mensaje ="";
		$alertnombre;
		$alertTelefono;
		$alertCorreo;
		$alertTexto;
		$tipoAlerta="";
		$captcha="prueba modo local";
		if (!empty($_POST)) {
			$nombre             = $_POST["nombre"];
			$telefono           = $_POST["telefono"];
			$direccion          = $_POST["direccion"];
			$texto              = $_POST["mensaje"];
			$correo             = $_POST["correo"];
			$archivo;
				if (!empty($captcha)) {
					if ($nombre == "" || $telefono== "" || $correo == "" || $texto == "" || strlen($telefono) != 10 || $this->is_valid_email($correo) != true ) 
					{
						$acceso= "Error!";
						$tipoAlerta="warning";
						$mensaje = "<b>Faltan o llene correctamente los datos indicados</b></br>";
						$mensaje .= "<b>Estas son las causas que impiden el correcto llenado del formulario:</b></br>";
						if ($nombre == "") 
						{
							$mensaje .="-Falta llenar <b>Nombre</b>.</br>";
							$alertnombre="Falta llenar Nombre.";
						}
						if ($telefono == "" || strlen($telefono) != 10) 
						{
							if (strlen($telefono) != 10) 
							{
								$mensaje .="-Ponga 10 d&iacute;gitos como m&iacute;nimo en <b>Tel&eacute;fono</b>.</br>";
								$alertTelefono="Ingreso un Telefono válido!.";
							}
							if ($telefono == "") 
							{
								$mensaje .="-Falta llenar <b>Tel&eacute;fono</b>.</br>";
								$alertTelefono="Falta llenar Telefono.";
							}
						}
						if ($correo == "" || $this->is_valid_email($correo) != true) 
						{
							if ($this->is_valid_email($correo) != true) 
							{
								$mensaje .="-Ingreso un <b>Correo</b> v&aacute;lido!.</br>";
								$alertCorreo="Ingreso un Correo válido!.";
							}
							if ($correo == "") 
							{
								$mensaje .="-Falta llenar <b>Correo</b>.</br>";
								$alertCorreo="Falta llenar Correo.";
							}
						}
						if ($texto == "" || $texto == null) 
						{
							$mensaje .="-Falta llenar <b>Mensaje</b>.</br>";
							$alertTexto="Falta llenar Mensaje.";
						}
					}
					else
					{
						$this->enviarMail($archivo,$nombre,$telefono,$correo,$direccion,$texto);    
						$acceso= "&Eacute;xito!";
						$mensaje = "Mensaje enviado exitosamente";
						$tipoAlerta="success";
					}     
					$mensaje = "Llene correctamente los datos."; 
				}
				else
				{
					$acceso= "Error!";
					$mensaje = "Llene el recaptcha";
					$tipoAlerta="warning";
				}
		}
		else
		{
			$acceso= "Error!";
			$mensaje = "Llene los datos";
			$tipoAlerta="warning";
		}
		$return_arr = array(
							"acceso" => $acceso,
							"mensaje" => $mensaje,
							"alertnombre" => $alertnombre,
							"alertTelefono" => $alertTelefono,
							"alertCorreo" => $alertCorreo,
							"alertTexto" => $alertTexto,
							"tipoAlerta" => $tipoAlerta
						);
		echo json_encode($return_arr);
	}
}
