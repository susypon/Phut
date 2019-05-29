<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriaModel extends CI_Model {
public function __construct(){
    parent::__construct();
}

	public function listar()
	{
		return $this->db->query("SELECT * FROM categoria")->result();
	}

    public function ingresar($a){
        $s = "INSERT INTO categoria(nombre, img)VALUES (?,?)";
        $this->db->query($s, $a);
    }

    public function eliminar($id){
        $s = "DELETE FROM categoria WHERE id = $id";
        $this->db->query($s);
    }

    public function obtenerPorId($id){
        return $this->db->query("SELECT * FROM categoria WHERE id = $id")->row();
    }

    public function editar($a){
        $s = "UPDATE categoria SET nombre = ? WHERE id = ?";
        $this->db->query($s, $a);
    }
}