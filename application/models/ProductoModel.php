<?php
    class ProductoModel extends CI_Model
    {
        public function Listar()
        {
            return $this->db->get('productos')->result(); 
        }

        public function eliminar($id)
        {
            $this->db->where('id',$id);
            $this->db->delete('productos');
        }

        public function ingresar($a)
        {
            $s= "INSERT INTO productos (nombre, cantidad, f_llegada, f_expiracion, precio, img) VALUES (?,?,?,?,?,?)";
            $this->db->query($s, $a);
        }

        public function Obtenerid($id)
        {
            return $this->db->query("SELECT * FROM productos WHERE id = $id")->row();
        }

        public function editar($a)
        {
            $s = "UPDATE productos SET nombre = ?, cantidad = ?, f_llegada = ?, f_expiracion = ?, precio = ?, img = ? WHERE id = ?";
            $this->db->query($s, $a);
        }

        public function productosID($id)
        {
          

            return $this->db->query( "SELECT pro.id, pro.nombre, pro.cantidad, pro.f_llegada,  pro.f_expiracion, 
                            pro.precio, pro.img, dc.id_categoria
            FROM detalle_categoria dc
            INNER JOIN productos pro ON dc.id_productos = pro.id
            INNER JOIN categoria cat ON dc.id_categoria = cat.id WHERE id_categoria = $id")->result();

            
        }
    }
?>