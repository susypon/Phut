<?php
class login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index(){
        $this->load->view('login/index');
    }
    public function validar(){
        $a = [
            $this->input->post('correo'),
            $this->input->post('pass')
        ];

        

        $u = $this->login_model->validar($a);

        if (!is_null($u)) {
            $this->session->set_userdata('user', $u);
            redirect('Categoria');
        }else {
            redirect('login');
        }
    }

    public function salir(){
        $this->session->unset_userdata('user');
        redirect('producto/index');
    }

}
?>