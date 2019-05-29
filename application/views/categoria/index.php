<center><h4><b>Categorias</b></h4></center>
<div class="row">
  <?php foreach ($categorias as $categoria) { ?>
  <div class="card mb-2" style="max-width: 400px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url($categoria->img) ?>" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $categoria->nombre ?></h5>
          <?php if ($this->session->user->tipo == "Administrador") { ?>        
          
  <a href='<?= base_url()?>categoria/accion/<?= $categoria->id?>'>Editar</a>
  <a onclick="return confirm('Desea eliminar el registro?')" href='<?= base_url("Categoria/eliminar/$categoria->id")?>'>Eliminar</a>
  <?php } ?>
  <a href='<?= base_url()?>categoria/vista/<?= $categoria->id?>'>Selecionar</a>
          </div>
      </div>
    </div>
</div>&nbsp;
<?php } ?>       
</div>
