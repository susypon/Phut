<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {
	public function __construct(){
		parent::__construct();
		/*if(!$this->session->user){
            redirect('login');
        }*/
		$this->load->model('CategoriaModel');
	}

	public function index()
	{
		$this->load->view('layout/menu');
		$this->load->view('categoria/index', ['categorias' => $this->CategoriaModel->listar()]);
		$this->load->view('layout/footer');
	}

	public function vista($id)
	{
		$this->load->model('ProductoModel');

		$this->load->view('layout/menu');
		$this->load->view('categoria/vista', ['productos' => $this->ProductoModel->productosID($id)]);
		$this->load->view('layout/footer');
	}


	
	public function ingresarActualizar(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[5]',
				array('required' => 'Usted debe llenar el %s.'));
		
				


		if ($this->form_validation->run() == FALSE) {
		$erros = array('mensagens' => validation_errors('<div class="alert alert-danger">','</div>'));
		$this->load->view('nuevo/user', $erros);
		} else {

			$archivo = $_FILES['archivo']['tmp_name'];
			$tipo = $_FILES['archivo']['type'];
			$nombre = $_POST['img']. '.' .explode('/',$tipo)[1];
			
			$tamaño = $_FILES['archivo']['size'];
	  
			$destino = "assets/img/".$nombre;
	  
			$subido = move_uploaded_file($archivo,$destino);


		$a = [
			$this->input->post('nombre'),
			$destino

		];

		if ($this->input->post('id') != '') {
			
			$a[] = $this->input->post('id');
			$this->CategoriaModel->editar($a);
		} else {
			$this->CategoriaModel->ingresar($a);
		}
	}
		redirect('categoria');
	}


	public function accion($id = 0){

        if ($id == 0){

			$this->load->view('layout/menu');
			$this->load->view('categoria/accion');
			$this->load->view('layout/footer');
		}else {
            $u = $this->CategoriaModel->obtenerPorId($id);
			$a['categoria'] = $u;
			
			$this->load->view('layout/menu');
			$this->load->view('categoria/accion', $a);
			$this->load->view('layout/footer');
			
        }
    }

	public function eliminar($id){
		$this->CategoriaModel->eliminar($id);
		redirect('categoria');
	}


}
