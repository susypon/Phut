<<<<<<< HEAD
<style>
    .box-form
        {
            box-sizing: content-box;
            width: 30%;
            padding: 30px;
            text-decoration: none;
            position: absolute;
            top: 120px;
            left: 40%;
            border-radius: 10px;
            border:10px;
        }
</style>
<body>
    <div class="box-form">
        <center><h4>Categoria </h4></center>
        
        <form action="<?= base_url('categoria/ingresarActualizar') ?>" method="post" >
=======
<h1> Editar/Agregar Categoria </h1>
  
<hr>
<br>
<br>
<form action="<?= base_url('categoria/ingresarActualizar') ?>" method = "POST" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $categoria->id ?? ''?>">
        <input name="nombre" placeholder="Nombre" value="<?= $categoria->nombre ?? '' ?>">
>>>>>>> 4722c74e1d84788ebdc5af372e46d320e458118a

            <input type="hidden" name="id" value="<?= $categoria->id ?? ''?>">
            <input name="nombre" class="form-control"placeholder="Nombre" value="<?= $categoria->nombre ?? '' ?>">
            

        <center><h4>Imagen</h4></center>
            <input class="form-control" name="img" placeholder="Nombre de la imagen"><br>
            <label for="archivo">Subir</label><br/>
            <input type="file" name="archivo"/><br/>
            <br><input type="submit" class="btn btn-success"value = "Guardar" >&nbsp;<i class="fas fa-download"></i><br>
       
        </div>
    </form>
</body>
