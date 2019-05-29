<?php
class login_model extends CI_Model{

    public function validar($a){
        
        $s= "SELECT * FROM usuarios WHERE correo = ? AND pass = sha1(?)";

        return $this->db->query($s, $a)->row();
    }
}
?>