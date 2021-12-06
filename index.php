<?php
require_once "./modulos/modulos.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/0f48d8c00d.js"></script>

    <link rel="stylesheet" href="css/style.css">

    <!-- SweetAlert -->
    <link rel="stylesheet" href="assets/plugins/SweetAlert/dist/sweetalert2.min.css">
    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.11.2/css/dataTables.bootstrap4.min.css">
    <title>E-Commerce lupita</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <h6>E-commerce Lupita</h6>
        <!-- <img src="img/logo_panel.png" alt="" class="img-flud"> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mr-auto">
                    <a href="#" class="nav-link">Inicio</a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tienda
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="categorias.html" class="dropdown-item">Categorías</a>
                        <a href="productos.html" class="dropdown-item">Productos</a>
                        <a href="inventario.html" class="dropdown-item">Inventario</a>
                       <div class="dropdown-divider"></div>
                       <a href="pedidos.html" class="dropdown-item">Pedidos</a>
                       <div class="dropdown-divider"></div>
                       <a href="cupones.html" class="dropdown-item">Cupones</a>
                    </div>
                </li>
            </ul>

            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> Bienvenid@ Lupita</a>

                    <div class="dropdown-menu">
                        <a href="perfil.html" class="dropdown-item"><i class="fas fa-user-circle"></i> Perfil</a>

                        <a href="#" class="dropdown-item"><i class="fas fa-cog"></i> Configuraciones</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link">
                        <i class="fas fa-user-times"></i> Salir
                    </a>
                </li>
            </ul>
            
        </div>
    </nav>
    <div class="col-sm-12 col-md-9">
        <div class="row">
            <div class="card-body">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="panel.html">Inicio</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Productos</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#agregarProducto">
                        <i class="fas fa-plus"></i> Nueva Producto
                    </button>
                </div>
            </div>
        </div>

       <!--Últimos productos-->
       <div class="card mt-5">
        <div class="card-header bg-dark text-white">
            <h4><i class="fas fa-table"></i>Últimos Productos</h4>
        </div>
        <div class="card-body">
            <table id="productos" class="table table-striped">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Talla</th>
                        <th>Precio</th>
                        <th>imagenes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $tabla = new Modulos();
                        $tabla -> Mostrar_tabla();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <!--Modal artículo-->
<div class="modal fade" id="agregarProducto" tabindex="-1" role="dialog" aria-labelledby="EjemploModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EjemploModal">
                    Ingresar una nuevo producto
                </h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Registrar productos -->
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese nombre de producto">
                    </div>
                    <div class="form-group">
                        <label for="tall">Talla</label>
                        <input type="text" class="form-control" name="talla" id="talla" placeholder="Ingrese talla del producto">
                    </div>
                    <div class="form-group">
                        <label for="tall">Precio</label>
                        <input type="number" class="form-control" name="precio" id="precio" placeholder="Ingrese el precio del producto">
                    </div>
                    <div class="form-group">
                        <label for="tall">Imagen</label>
                        <input type="file" class="form-control" name="imagen" id="imagen">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit"  name="guardar" id="guardar" class="btn btn-primary">
                            <i class="fas fa-save"></i> Guardar
                        </button>
                        <?php
                            if(isset($_POST["guardar"])){
                                $registrar = new Modulos();
                                $registrar -> registrar_producto();
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Datatables -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>
    <script src="assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
    <!-- SweetAlert -->
    <script src="carrito.js"></script>
</body>
</html>