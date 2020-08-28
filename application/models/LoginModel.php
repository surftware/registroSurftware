<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginModel extends CI_Model
{
    public function getUsuario($Nombre ='' ){

        $consulta= 
        'SELECT * FROM usuarios INNER JOIN perfil ON usuarios.Usuario_Perfil = perfil.Perfil_Id WHERE Usuario_Nombre ="'. $Nombre.'" LIMIT 1';
        //INNER JOIN perfil ON usuarios.Usuario_Perfil = perfil.Perfil_Id
        //echo $Nombre.'<br>';
        $result = 
        $this->db->query($consulta);
        if ($result -> num_rows()>0)
        {
            return $result->row();
        }
        else{
            return null;
        }
    }
}
