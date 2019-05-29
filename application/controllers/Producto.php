 <?php
    class Producto extends CI_Controller{

        public function __construct(){
            parent::__construct();
            /*if(!$this->session->user){
                redirect('login');
            }*/
        }

        public function index()
        {
            $this->load->view('layout/menu');
            $this->load->view('productos/index', ['productos' => $this->ProductoModel->Listar()]);
            $this->load->view('layout/footer');
        }

        public function usuario_vista()
        {
            $this->load->view('layout/menu');
            $this->load->view('usuario/index', ['productos' => $this->ProductoModel->Listar()]);
            $this->load->view('layout/footer');
        }

        public function eliminar($id)
        {
            $this->ProductoModel->eliminar($id);
            redirect('producto');
        }

        public function agregar($id = 0)
        {
            
            if ($id == 0) {

                $this->load->view('layout/menu');
                $this->load->view('productos/agregar');
                $this->load->view('layout/footer');

            }else {
                $u = $this->ProductoModel->Obtenerid($id);
                $a['producto'] = $u;

                $this->load->view('layout/menu');
                $this->load->view('productos/agregar',$a);
                $this->load->view('layout/footer');
            }
        }

        public function ingresar()
        {
            $archivo = $_FILES['archivo']['tmp_name'];
            $tipo = $_FILES['archivo']['type'];
            $nombre = $_POST['img']. '.' .explode('/',$tipo)[1];
            
            $tamaño = $_FILES['archivo']['size'];
      
            $destino = "assets/img/".$nombre;
      
            $subido = move_uploaded_file($archivo,$destino);


            $a=
            [
                $this->input->POST('nombre'),
                $this->input->POST('cantidad'),
                $this->input->POST('f_llegada'),
                $this->input->POST('f_expiracion'),
                $this->input->POST('precio'),
                $destino
            ];

            if ($this->input->POST('id') != '')
            {
                $a[] = $this->input->POST('id');
                $this->ProductoModel->editar($a);
            }else{
                $this->ProductoModel->ingresar($a);
            }

            redirect('Producto');
        }

        #######################################################################

        

        public function new_user(){

            $this->load->view('layout/menu');
            $this->load->view('nuevo/user');
            $this->load->view('layout/footer');

        }

        public function user(){
            $this->load->model('usuario_model');

            $this->load->view('layout/menu');
            $this->load->view('usuario/usuarios', ['info' => $this->usuario_model->datos()]);
            $this->load->view('layout/footer');
        }
      
      
        public function ingresarActualizar(){
      
          $this->load->library('form_validation');
          $this->load->model('usuario_model');
          $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[5]',
                  array('required' => 'Usted debe llenar el %s.'));
          
          $this->form_validation->set_rules('correo', 'Correo', 'required|max_length[40]',
          array('required' => 'Usted debe llenar el %s.'));

          
      
          $this->form_validation->set_rules('pass', 'contraseña', 'required|min_length[5]',
                  array('required' => 'Usted debe llenar  %s.'));
          
          $this->form_validation->set_rules('passconf', 'Confirmación', 'required|matches[pass]', array('required' => 'Usted debe llenar %s.', 'matches' => 'No coinciden'));            

          $this->form_validation->set_rules('telefono', 'Telefono', 'required|min_length[5]',
          array('required' => 'Usted debe llenar el %s.'));

          $this->form_validation->set_rules('direccion', 'Direccion', 'required|min_length[5]',
          array('required' => 'Usted debe llenar el %s.'));

          if ($this->form_validation->run() == FALSE) {
          $erros = array('mensagens' => validation_errors('<div class="alert alert-danger">','</div>'));
          $this->load->view('nuevo/user', $erros);
          } else {
         
      
              $a = [
                  $this->input->post('nombre'),
                  $this->input->post('correo'),
                  hash('sha1',$this->input->post('pass')),
                  $this->input->post('telefono'),
                  $this->input->post('direccion')
                  
              ];
      
                  if ($this->input->post('id') != '') {
                      $a[] = $this->input->post('id');
                      $this->usuario_model->editar($a);
                  }else {
                      $this->usuario_model->ingresar($a);
                  }
              redirect('Producto');
          }
        }
        public function eliminar_user($id){
            $this->load->model('usuario_model');
          $this->usuario_model->eliminar($id);
          redirect('Producto');
        }
      
        public function editar($id = 0){
          if ($id == 0) {
            $this->load->model('usuario_model');
            
            $this->load->view('layout/menu');
              $this->load->view('nuevo/user');
              $this->load->view('layout/footer');
          }else {
            $this->load->model('usuario_model');
              $u = $this->usuario_model->userID($id);
      
              $this->load->view('layout/menu');
              $this->load->view('nuevo/user', ['datos' => $u]);
              $this->load->view('layout/footer');
          }
        }



    }

?>