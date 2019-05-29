<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Carrito</h1>    
    <div>
    <a href="<?= base_url('productos') ?>">Seguir comprando</a>
	<?php if ($this->session->carrito) {
			$total = 0; ?>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio unitario</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <?php foreach ($this->session->carrito as $producto) { ?>
            <tr>
            <td><?= $producto->nombre ?></td>
            <td>$<?= $producto->precio ?></td>
            <td><?= $producto->cantidad ?></td>
            <td>$<?php $total += $producto->subtotal; echo $producto->subtotal; ?></td>
            <td><a href="">Quitar del carrito</a></td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="3">Total</td>
        <td>$<?= $total ?></td>
        <td><a href="<?= base_url('carrito/pagar') ?>">Pagar</a></td>
    </tr>
    </table>
    <?php } ?>
    </div>
    </div>

     <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin-2.min.js')?>"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('assets/js/demo/chart-area-demo.js')?>"></script>
  <script src="<?= base_url('assets/js/demo/chart-pie-demo.js')?>"></script>
 
</body>
</html>