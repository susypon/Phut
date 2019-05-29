<?php
class usuario_model extends CI_Model{

    public function datos(){
        return $this->db->get('usuarios')->result(); 
   
    }
    public function ingresar($a){
        $s = "INSERT INTO usuarios (nombre, correo, pass, telefono, direccion) VALUES (?, ?, ?, ?, ?) ";

        $this->db->query($s, $a);
    }

    public function editar($a){
        $s = "UPDATE usuarios SET nombre = ?, correo = ?, pass = ?, telefono = ?, direccion = ? WHERE id = ?";
        $this->db->query($s, $a);
    }
    public function userID($id){
        return $this->db->query("SELECT * FROM usuarios WHERE id = $id")->row(); 
    }
    public function eliminar($id){
        $this->db->query("DELETE FROM usuarios WHERE id = $id");
    }
}

