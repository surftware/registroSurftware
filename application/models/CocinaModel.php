<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CocinaModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getCocina()
	{
		return $this->db->query("SELECT Usuario_Id, Usuario_Nombre, Usuario_Email, Usuario_Telefono, Usuario_CodigoPostal, Usuario_Estado, Usuario_Alcaldia, Usuario_Colonia, Usuario_NumInterior, Usuario_NumExterior, Usuario_Pass, Usuario_Puesto FROM usuarios WHERE Usuario_Puesto = 'cocina'")->result();
	}

	public function setCocina(string $Nombre, string $Email, string $Telefono, string $CodigoPostal, string $Estado, string $Alcaldia, string $Colonia, string $NumInterior, string $NumExterior, string $Pass, string $Puesto)
	{
		return $this->db->query("INSERT INTO usuarios (Usuario_Nombre, Usuario_Email, Usuario_Telefono, Usuario_CodigoPostal, Usuario_Estado, Usuario_Alcaldia, Usuario_Colonia, Usuario_NumInterior, Usuario_NumExterior, Usuario_Pass, Usuario_Puesto) values ({$Nombre}, {$Email}, {$Telefono}, {$CodigoPostal}, {$Estado}, {$Alcaldia}, {$Colonia}, {$NumInterior}, {$NumExterior}, {$Pass} , 'cocina')");
	}
	public function getCocina1(int $Id)
	{
		return $this->db->query("SELECT Usuario_Id, Usuario_Nombre, Usuario_Email, Usuario_Telefono, Usuario_CodigoPostal, Usuario_Estado, Usuario_Alcaldia, Usuario_Colonia, Usuario_NumInterior, Usuario_NumExterior, Usuario_Pass, Usuario_Puesto FROM usuarios WHERE Usuario_Id = {$Id}")->row();
	}
	public function updateCocina(
		int $Id, string $Nombre, string $Email, string $Telefono, string $CodigoPostal, string $Estado, string $Alcaldia, string $Colonia, string $NumInterior, string $NumExterior, string $Pass , string $Puesto
	)
	{
		return $this->db->query("UPDATE usuarios SET Usuario_Nombre = {$Nombre}, Usuario_Email = {$Email}, Usuario_Telefono = {$Telefono}, Usuario_CodigoPostal = {$Telefono}, Usuario_Estado = {$Estado}, Usuario_Alcaldia = {$Alcaldia}, Usuario_Colonia = {$Colonia}, Usuario_NumInterior = {$NumInterior}, Usuario_NumExterior = {$NumExterior}, Usuario_Pass = {$Pass}, Usuario_Puesto = 'cocina' WHERE Usuario_Id = {$Id}");
	}
	public function deleteCocina(int $Id)
	{
		return $this->db->query("DELETE FROM usuarios WHERE Usuario_Id = {$Id}");
	}
}