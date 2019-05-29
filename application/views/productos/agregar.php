<style>
        .box1
        {
            box-sizing: content-box;
            width: 30%;
            padding: 30px;
            text-decoration: none;
            position: absolute;
            top: 95px;
            left: 350px;
            border-radius: 10px;
            border:10px;
        }
        .box2
        {
            box-sizing: content-box;
            width: 30%;
            padding: 30px;
            text-decoration: none;
            position: absolute;
            top: 110px;
            padding-left: 740px;
            border-radius: 10px;
            border:10px;
        }
    </style>
    <title>Producto</title>
</head>
<body>
<center><h4><b>Nuevo producto</b></h4></center>
    <div class="box1">
        <form action="<?= base_url('producto/ingresar')?>" method = "POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value = "<?= $producto->id ?? '' ?>"><br>
            <h4>Producto</h4>
            Producto
            <input class="form-control" id = "nom" type="text" name = "nombre" placeholder ="Producto" value = "<?= $producto->nombre ?? '' ?>"><br>
            Cantidad
            <input class="form-control" id = "cant" type="number" name = "cantidad" placeholder = "Cantidad" value = "<?= $producto->cantidad ?? '' ?>"><br>
            Fecha de llegada
            <input class="form-control" type="date" name = "f_llegada" placeholder = "Fecha de entrega" value = "<?= $producto->f_llegada ?? '' ?>"><br>
            Fecha de vencimiento
            <input class="form-control" type="date" name = "f_expiracion" placeholder="Fecha de caducación" value = "<?= $producto->f_expiracion ?? '' ?>"><br>
            Precio
            <input class="form-control" id = "prec" type="text" name="precio" placeholder="Precio" value = "<?= $producto->precio ?? '' ?>"><br>
            </div>

            <div class="box2">
            <h4>Imagen</h4>
                <label for="archivo">Nombre</label><br/>
                <input class="form-control" name="img" placeholder="Nombre de la imagen"><br>
                
                <center><input type="file" name="archivo"/><br/>
            <br><br><button class="btn btn-info" type="submit"></button><input  value = "Guardar">&nbsp;</i><br></center>
        </form>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i></button>