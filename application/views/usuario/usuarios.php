<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a  href="<?= base_url('login/salir')  ?>" class="btn btn-info">Cerrar sesion</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">contraseña</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">tipo</th>
      <th scope="col">opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($info as $datos) { ?>
    <tr>
      <td><?= $datos->nombre ?></td>
      <td><?= $datos->correo ?></td>
      <td><?= $datos->pass ?></td>
      <td><?= $datos->telefono ?></td>
      <td><?= $datos->direccion ?></td>
      <th scope="row"><?= $datos->tipo ?></th>
      <td>
         
         <a href="<?= base_url('Producto/editar/'. $datos->id)?>"  class="btn btn-dark">Editar</a>
         <a href="<?= base_url('Producto/eliminar_user/'. $datos->id) ?>" class="btn btn-dark">Eliminar</a>
      </td>
    </tr>
<?php } ?>
</tbody>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>