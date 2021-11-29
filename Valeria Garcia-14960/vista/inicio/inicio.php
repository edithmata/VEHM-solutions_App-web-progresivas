<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PWA <?php echo date("Y"); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <!-- INICIA EL MENU PRINCIPAL -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4d8679">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Novedades</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Sobre Nosotros</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Redes</a>
                            <a class="dropdown-item" href="#">¿Quienes somos?</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Contactanos</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- TERMINA EL MENU PRINCIPAL -->
    <!-- INICIA EL CONTENIDO DE LA PÁGINA -->
    <div class="container-lg p-3 mt-5" style="text-align: center;">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card" style="height: 100%">
                    <center>
                        <img src="configuracion/imagenes/usuario.jpg" style="width: 15%;" class="card-img-top" alt="...">
                    </center>
                    <div class="card-body">
                        <h5 class="card-title">Login Usuario</h5>
                        <p class="card-text"><button data-bs-toggle="modal" data-bs-target="#modal_login_usuario"
                                class="btn btn-success btn-sm">Ingresar</button></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="height: 100%">
                    <center>
                        <img src="configuracion/imagenes/admin.jpg" style="width: 15%;" class="card-img-top" alt="...">
                    </center>
                    <div class="card-body">
                        <h5 class="card-title">Login Administrador</h5>
                        <p class="card-text"><button data-bs-toggle="modal" data-bs-target="#modal_login_admin"
                                class="btn btn-success btn-sm">Ingresar</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TERMINA EL CONTENIDO DE LA PÁGINA -->

    <!-- INICIA MODAL PARA LOGIN -->
    <div class="modal fade" id="modal_login_usuario">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login Usuario</h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user">Usuario:</label>
                        <input type="text" class="form-control" placeholder="Ingrese usuario" id="user">
                    </div>
                    <div class="form-group">
                        <label for="user_pass">Contraseña:</label>
                        <input type="password" class="form-control" placeholder="Ingrese Contraseña" id="user_pass">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer" style="text-align: center; display: inline;">
                  <button type="button" onclick="login_usuario()" class="btn btn-primary">Ingresar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_login_admin">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login Administrador</h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user_admin">Usuario:</label>
                        <input type="text" class="form-control" placeholder="Ingrese Usuario" id="user_admin">
                    </div>
                    <div class="form-group">
                        <label for="admin_pass">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Ingrese Contraseña" id="admin_pass">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer" style="text-align: center; display: inline;">
                    <button type="button" onclick="login_admin()" class="btn btn-primary">Ingresar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    <!-- TERMINA MODAL PARA LOGIN -->

<div id="show_alert"></div>

<!-- ALERTAS PARA LOGIN -->
<div class="alert alert-success alert-dismissible fade" style="position: fixed; top: 8%; right: 0; z-index: 10000;" id="alerta_login_correcto">
  <img src="configuracion/imagenes/imagen_login_correcto.png" style="width: 20%;" class="card-img-top" alt="...">
  <p id="texto_bienvenida"></p>
</div>
<div class="alert alert-danger alert-dismissible fade" style="position: fixed; top: 8%; right: 0; z-index: 10000;" id="alerta_login_error">
  <img >
  <img src="configuracion/imagenes/imagen_error.png" style="width: 25%;" class="card-img-top" alt="...">
  <p id="texto_error"></p>
</div>
<!-- FIN DE ALERTAS PARA LOGIN-->






    <!-- SE LLAMA AL ARCHIVO login.js -->
    <script src="configuracion/js/login_usuario.js"></script>
    <script src="configuracion/js/login_admin.js"></script>
</body>

</html>