
<a  href="<?= base_url('Producto/index')  ?>" class="btn btn-primary">inicio</a>
<a href="<?= base_url('carrito/ver')  ?>" class="btn btn-secondary">Ver carrito</a>

<div class="row">
<?php
    foreach ($productos as $datos) { 
   ?>
   
<div class="card" style="width: 11rem;">
    
    <img src="<?=base_url($datos->img)?>" class="img-thumbnail" />
   
        <div class="card-body" >

        <p class='card-text'><?= $datos->nombre ?></p>
        <p class="text-decoration-none" style="color: #690f11; font-family: 'Roboto', sans-serif;">$<?= $datos->precio ?></p>
        <form method="post" action="<?= base_url('carrito/agregar') ?>">
                <input type="hidden" name="id" value="<?= $datos->id ?>" />
                <input type="number" name="cantidad" min="1" value="1" max="<?= $datos->cantidad ?>" placeholder="Cantidad" />
                <input type="submit" class="buttom buttom-danger" value="Agregar al carrito" />
                </form>
    </div>
    <div class="row">
        <?php
            foreach ($productos as $datos) { 
        ?>
        
            <div class="card" style="width: 11rem;">
                
                <img src="<?=base_url($datos->img)?>" class="img-thumbnail" />
            
                <div class="card-body" >

                <p class='card-text'><?= $datos->nombre ?></p>
                <p class="text-decoration-none" style="color: #690f11; font-family: 'Roboto', sans-serif;">$<?= $datos->precio ?></p>
                <form method="post" action="<?= base_url('carrito/agregar') ?>">
                    <input type="hidden" name="id" value="<?= $datos->id ?>" />
                    <input type="number" class="form-control" name="cantidad" min="1" max="<?= $datos->cantidad ?>" placeholder="Cantidad" value ="1"/>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i></button>
                    </form>
                </div>
            </div>   
        <?php } ?>
    </div>
</div>