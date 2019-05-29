<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!-- Custom fonts for this template-->
<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            
            <img src="<?= base_url('assets/img/registro.img.jpg')?>" alt="" class="col-lg-6 d-lg-block">
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Bienvenido de regreso!</h1>
                </div>
                <hr>
                  <form class="user" action="<?= base_url('login/validar') ?>" method="post">
                    <div class="form-group">
                      <input type="text" name="correo" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="pass"  placeholder="*********">
                      <hr>
                    </div>
                    <input type="submit" value="Ingresar" class="btn btn-primary btn-user btn-block">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('Producto/new_user')?>">Crea una cuenta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin-2.min.js')?>"></script>

</body>

</html>
