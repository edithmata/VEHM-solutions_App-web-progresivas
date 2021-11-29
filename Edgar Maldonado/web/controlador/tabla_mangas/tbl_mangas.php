<?php
include("../../modelo/mdl_tbl_mangas.php");
$obj = new tablas_manga();

if(isset($_POST['ver_tabla_mangas'])){
    $resultado = $obj -> ver_tabla_mangas();
    echo '
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
    <th>Nombre del manga</th>
    <th>Precio del manga</th>
    <th>Cantidad</th>
    </tr>
    </thead>
    <tbody>
    ';

    foreach($resultado as $r){
        echo '
        <tr>
                <td>'.$r['nombre_manga'].'</td>
                <td>'.$r['precio'].'</td>
                <td>'.$r['cantidad'].'</td>
            </tr>
        ';
    }

    echo '
    </tbody>

</table>
    ';
    echo "
    <script>
    
</script>";
} 


if(isset($_POST['tbl_eliminar_usuario'])){
    $resultado = $obj -> ver_tabla_mangas();
    echo '
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
    <th>Nombre del manga</th>
    <th>Precio del manga</th>
    <th>Cantidad</th>
    <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
    ';

    foreach($resultado as $r){
        echo '
        <tr>
                <td>'.$r['nombre_manga'].'</td>
                <td>'.$r['precio'].'</td>
                <td>'.$r['cantidad'].'</td>
                <td><button class="btn btn-danger" onclick="eliminar_manga('.$r['id_manga'].')">Eliminar Manga</button></td>
            </tr>
        ';
}

echo '
</tbody>

</table>
';
}

if(isset($_POST['ver_tabla_mod_mangas'])){
    $resultado = $obj -> ver_tabla_mangas();
    echo '
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            <th>Nombre del manga</th>
            <th>Precio del manga</th>
            <th>Cantidad</th>
            <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
    ';

    foreach($resultado as $r){
        echo '
        <tr>
        <td>'.$r['nombre_manga'].'</td>
        <td>'.$r['precio'].'</td>
        <td>'.$r['cantidad'].'</td>
                <td><button class="btn btn-info" onclick="modificar_manga('.$r['id_manga'].')">Modificar Manga</button></td>
            </tr>
        ';
}

echo '
</tbody>

</table>
';
}

if(isset($_POST['del_manga'])){
    $id_manga = $_POST['del_manga'];
    $resultado = $obj -> eliminar_manga($id_manga);
    if($resultado == true){
        exit(json_encode([
            "status" => "1"
        ]));
    }else{
        exit(json_encode([
            "status" => "2"
        ]));
    }
}


if(isset($_POST['modal_mod_manga'])){
    $id_manga =  $_POST['modal_mod_manga'];
    $resultado = $obj -> busqueda_manga($id_manga);
    foreach($resultado as $r){
        $nombre = $r['nombre_manga'];
        $correo = $r['precio'];
        $contrasena = $r['cantidad'];
    }
    echo'
    <div class="modal fade" id="modal_mod_manga">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modificar Manga</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="form-group">
    <label for="nombre_usuario_mod">Nombre del manga:</label>
    <input type="hidden" class="form-control" placeholder="Ingrese nombre nuevo" value="'.$id_manga.'" id="id_manga_mod">
    <input type="text" class="form-control" placeholder="Ingrese usuario nuevo" value="'.$nombre.'" id="nombre_manga_mod">
  </div>
  <div class="form-group">
    <label for="precio_mod">Precio del manga:</label>
    <input type="email" class="form-control" placeholder="Agregar precio" value="'.$precio.'" id="precio_mod">
  </div>
  <div class="form-group">
    <label for="cantidad_mod">Cantidad de mangas:</label>
    <input type="text" class="form-control" placeholder="Escribe una cantidad" value="'.$cantidad.'" id="cantidad_mod">
  </div>
  
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button class="btn btn-primary" onclick="modificar_info_mangas()">Registrar manga</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>
    ';

}


if(isset($_POST['nombre_manga_mod'])){
    $nombre = $_POST['nombre_manga_mod'];
    $correo = $_POST['precio_mod'];
    $contrasena = $_POST['cantidad_mod'];
    $id_usuario = $_POST['id_manga_mod'];
    $resultado = $obj -> modificar_informacion_mangas($id_manga,$nombre,$precio,$cantidad);
    if($resultado == true){
        exit(json_encode([
            "status" => "1"
        ]));
    }else{
        exit(json_encode([
            "status" => "2"
        ]));
    }
}
?>