<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmpleadosModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getEmpleados()
	{
		return $this->db->query("SELECT * FROM empleados")->result();
	}

	public function AltaEmpleados(
        string $Empleado_NombreCompleto,
	string $Empleado_FechaDeNacimiento,
	string $Empleado_Edad,
	string $Empleado_Sexo,
	string $Empleado_EstadoCivil,
	string $Empleado_Nacionalidad,
	string $Empleado_Calle,
	string $Empleado_Colonia,
	string $Empleado_Ciudad,
	string $Empleado_Estado,
	string $Empleado_CodigoPostal,
	string $Empleado_Telefono,
	string $Empleado_SeguroSocial,
	string $Empleado_Curp,
	string $Empleado_RFC,
	string $Empleado_Correo,
	string $Empleado_Puesto
        )
	{
		return $this->db->query(
            "INSERT INTO empleados ( ".
            "Empleado_NombreCompleto,".
            " Empleado_FechaDeNacimiento,".
            " Empleado_Edad,".
            " Empleado_Sexo,".
            " Empleado_EstadoCivil,".
            " Empleado_Nacionalidad,".
            " Empleado_Calle,".
            " Empleado_Colonia,".
            " Empleado_Ciudad,".
            " Empleado_Estado,".
            " Empleado_CodigoPostal,".
            " Empleado_Telefono,".
            " Empleado_SeguroSocial,".
            " Empleado_Curp,".
            " Empleado_Puesto,".
            " Empleado_RFC,".
            " Empleado_Correo".
            ") values (".
            "{$Empleado_NombreCompleto}, ".
            "{$Empleado_FechaDeNacimiento}, ".
            "{$Empleado_Edad}, ".
            "{$Empleado_Sexo}, ".
            "{$Empleado_EstadoCivil}, ".
            "{$Empleado_Nacionalidad}, ".
            "{$Empleado_Calle}, ".
            "{$Empleado_Colonia}, ".
            "{$Empleado_Ciudad}, ".
            "{$Empleado_Estado} , ".
            "{$Empleado_CodigoPostal}, ".
            "{$Empleado_Telefono}, ".
            "{$Empleado_SeguroSocial}, ".
            "{$Empleado_Curp} , ".
            "{$Empleado_Puesto}, ".
            "{$Empleado_RFC} , ".
            "{$Empleado_Correo} )");
	}
	public function getgetEmpleado(int $Empleado_Id)
	{
		return $this->db->query("SELECT * FROM empleados WHERE Empleado_Id = {$Empleado_Id}")->row();
	}
	public function updateEmpleados(
                string $Empleado_Id,
                string $Empleado_NombreCompleto, 
                string $Empleado_FechaDeNacimiento, 
                string $Empleado_Edad, 
                string $Empleado_Sexo, 
                string $Empleado_EstadoCivil, 
                string $Empleado_Nacionalidad, 
                string $Empleado_Calle, 
                string $Empleado_Colonia, 
                string $Empleado_Ciudad, 
                string $Empleado_Estado, 
                string $Empleado_CodigoPostal,
                string $Empleado_Telefono, 
                string $Empleado_SeguroSocial, 
                string $Empleado_Curp, 
                string $Empleado_RFC, 
                string $Empleado_Correo,
                string $Empleado_Puesto
	)
	{
        return $this->db->query("UPDATE empleados SET ".
        "Empleado_NombreCompleto = {$Empleado_NombreCompleto}, ".
        "Empleado_FechaDeNacimiento = {$Empleado_FechaDeNacimiento}, ".
        "Empleado_Edad = {$Empleado_Edad}, ".
        "Empleado_Sexo = {$Empleado_Sexo}, ".
        "Empleado_EstadoCivil = {$Empleado_EstadoCivil}, ".
        "Empleado_Nacionalidad = {$Empleado_Nacionalidad}, ".
        "Empleado_Calle = {$Empleado_Calle}, ".
        "Empleado_Colonia = {$Empleado_Colonia}, ".
        "Empleado_Ciudad = {$Empleado_Ciudad}, ".
        "Empleado_Estado = {$Empleado_Estado}, ".
        "Empleado_CodigoPostal = {$Empleado_CodigoPostal}, ".
        "Empleado_Telefono = {$Empleado_Telefono}, ".
        "Empleado_SeguroSocial = {$Empleado_SeguroSocial}, ".
        "Empleado_Curp = {$Empleado_Curp}, ".
        "Empleado_RFC = {$Empleado_RFC}, ".
        "Empleado_Correo = {$Empleado_Correo}, ".
        "Empleado_Puesto = {$Empleado_Puesto} ".
        "WHERE Empleado_Id = {$Empleado_Id}");
	}
	public function deletegetEmpleados(int $Empleado_Id)
	{
		return $this->db->query("DELETE FROM empleados WHERE Empleado_Id = {$Empleado_Id}");
	}
}