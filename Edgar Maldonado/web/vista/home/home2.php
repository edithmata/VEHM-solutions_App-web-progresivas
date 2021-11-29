<?php
include("../menu/top.php");
?>

<div class="container text-center mt-5">
    <h1> <strong>Tabla de manga</strong> </h1>    
<div class="row">
        <div class="col-6">
            <div style="background-color: #fff;" id="tabla_mangas"></div>
        </div>
        <div class="col-6">
            <button class="btn btn-info" onclick="ver_tabla_mangas()">Ver Tabla</button>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_mangas">Agregar manga</button>
            <button class="btn btn-warning" onclick="tbl_modificar_manga()">Modificar manga</button>
            <button class="btn btn-danger" onclick="tbl_eliminar_manga()">Eliminar manga</button>
        </div>
    </div>
</div>

<div id="mdl_mod_manga"></div>

<!-- The Modal -->
<div class="modal fade" id="add_mangas">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Agregar Manga</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="form-group">
    <label for="nombre_usuario">Nombre del manga:</label>
    <input type="text" class="form-control" placeholder="Ingrese nombre nuevo" id="nombre_manga">
  </div>
  <div class="form-group">
    <label for="correo_usuario">Precio del manga:</label>
    <input type="email" class="form-control" placeholder="Agregar precio" id="precio">
  </div>
  <div class="form-group">
    <label for="contrasena_usuario">Cantidad:</label>
    <input type="text" class="form-control" placeholder="Escribe una cantidad" id="cantidad">
  </div>
  
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button class="btn btn-primary" onclick="agregar_manga()">Registrar manga</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>






<script src="configuraciones/js/tabla_mangas/tbl_mangas.js"></script>
<?php
include("../menu/bot.php");
?>