<div class="container-fluid">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><center>Productos</center><a href="<?=base_url('producto/usuario_vista')?>" class="btn btn-secondary">Lo que veria el usuario </a></h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
            <table id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>Producto</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Fecha de llegada</th>
                <th>Fecha de vencimiento</th>
                <th>Precio</th>
                <th colspan = "2">Opciones</th>
            </tr>
            <tr>
            <?php foreach ($productos as $producto) {?>
                <td><?=$producto->nombre?></td>
                <td><?=$producto->descripcion?></td>
                <td><?=$producto->cantidad?></td>
                <td><?=$producto->f_llegada?></td>
                <td><?=$producto->f_expiracion?></td>
                <td>$<?=$producto->precio?></td>
                <td>
                <form method="post" action="<?= base_url('carrito/agregar') ?>">
                <input type="hidden" name="id" value="<?= $producto->id ?>" />
                <input type="number" name="cantidad" min="1" value="1"  max="<?= $producto->cantidad ?>" placeholder="Cantidad" />
                <input type="submit" class="buttom buttom-danger" value="Agregar al carrito" />
                </form>
            </td>
                <td><a class="nav-link" href="<?= base_url('producto/agregar/'.$producto->id)?>"><i class="fas fa-edit"></i></a></td>
                <td><a class="nav-link" href="<?= base_url('producto/eliminar/'.$producto->id)?>"><i class="far fa-trash-alt"></i></a></td>

            </tr>
        <?php }?>
    </table>