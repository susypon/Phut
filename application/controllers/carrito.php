<?php
class carrito extends CI_Controller{

    public function __construct(){
        parent::__construct();
        /*if(!$this->session->user){
            redirect('login');
        }*/
        $this->load->model('productoModel');
    }

    public function agregar()
    {
        $productos = [];

        if ($this->session->carrito) {
            $productos = $this->session->carrito;
        }

        $obj = $this->productoModel->Obtenerid($this->input->post('id'));

        $obj->cantidad = $this->input->post('cantidad');
        $obj->subtotal = $obj->cantidad * $obj->precio;

        $productos[] = $obj;

        $this->session->set_userdata('carrito', $productos);

        redirect('producto/usuario_vista');
    }

    public function ver()
    {
        $this->load->view('layout/menu');
        $this->load->view('carrito/ver');
        $this->load->view('layout/footer');
    }

    public function pagar()
    {
        unset($_SESSION['carrito']);
        redirect('producto/usuario_vista');
    }

}
