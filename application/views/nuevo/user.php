<body>
 <div class="container-fluid">
<form action="<?= base_url('Producto/ingresarActualizar') ?>" method="post" novalidate>

            <h4><center><b>Crea tu cuenta</b></center></h4>
    
            <input type="hidden" name="id" value="<?= $datos->id ?? '' ?>" >
                Nombre
                <input class="form-control" type="text" name="nombre" value="<?= $datos->nombre ?? '' ?>" placeholder="Nombre de usuario" >
    
                <th>Correo</th>
                <td><input class="form-control" type="email" name="correo" value="<?= $datos->correo ?? '' ?>" placeholder="nombre@gmail.com">
            
            
            <input type="hidden" name="id" value="<?= $datos->id ?? '' ?>" >
                Telefono
                <input class="form-control" type="text" name="telefono" value="<?= $datos->telefono ?? '' ?>" placeholder="0000-000" >
            
            <input type="hidden" name="id" value="<?= $datos->id ?? '' ?>" >
                Direccion
                <input class="form-control" type="text" name="direccion" value="<?= $datos->direccion ?? '' ?>" placeholder="Departamento, Municipio, Residencial" >
            
                Contraseña
                <input class="form-control" type="password" name="pass" placeholder="*********">
            
               Confirme la contraseña
                <input class="form-control" type="password" name="passconf" placeholder="*********">
           
                Opciones
                <br><input type="submit" value="Guardar"  class="btn btn-dark">
                <input type="reset" value="Limpiar"  class="btn btn-dark">
</form>

<?= $mensagens ?? '' ?>
</div>
</body>