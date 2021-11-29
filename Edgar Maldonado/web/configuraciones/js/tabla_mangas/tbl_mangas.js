function ver_tabla_mangas() {
    $.ajax({
        url: "tbl_mangas",
        type: 'POST',
        data: { ver_tabla_mangas: "ok" },
        success: function(resp) {
            document.getElementById("tabla_mangas").innerHTML = resp;
            $(document).ready(function() {
                $('#example').DataTable();
            });
        }
    });
}

function tbl_eliminar_manga() {
    $.ajax({
        url: "tbl_mangas",
        type: 'POST',
        data: { tbl_eliminar_manga: "ok" },
        success: function(resp) {
            document.getElementById("tabla_mangas").innerHTML = resp;
            $(document).ready(function() {
                $('#example').DataTable();
            });
        }
    });
}

function eliminar_manga(id_manga) {
    let delete_manga = confirm("desea eliminar el manga con el id " + id_manga);
    if (delete_manga) {
        $.ajax({
            url: "tbl_mangas",
            type: 'POST',
            data: { del_manga: id_manga },
            success: function(resp) {
                var respuesta = JSON.parse(resp);
                if (respuesta.status == 1) {
                    alert("manga eliminado correctamente")
                    ver_tabla()
                } else {
                    alert("error al eliminar manga")
                }
            }
        });
    }
}



function agregar_manga() {
    if ($('#nombre_manga').val() == "") {
        alert("Campo NOMBRE MANGA VACIO")
    } else if ($('#precio').val() == "") {
        alert("Campo PRECIO MANGA VACIO")
    } else if ($('#cantidad').val() == "") {
        alert("Campo CANTIDAD MANGA VACIO")
    } else {
        var datos = new FormData();
        datos.append("nombre_manga", $('#nombre_manga').val());
        datos.append("precio", $('#precio').val());
        datos.append("cantidad", $('#cantidad').val());

        $.ajax({
            url: "tbl_mangas",
            type: 'POST',
            processData: false,
            contentType: false,
            data: datos,
            success: function(resp) {
                var resultado = JSON.parse(resp);
                if (resultado.status == 1) {
                    alert("manga agregado exitosamente")
                    ver_tabla()
                } else {
                    alert("error al añadir manga")
                }
            }
        });
    }
}

function modificar_manga(id_manga) {
    $.ajax({
        url: "tbl_mangas",
        type: 'POST',
        data: { modal_mod_manga: id_manga },
        success: function(resp) {
            document.getElementById("mdl_mod_manga").innerHTML = resp;
            $('#modal_mod_mangas').modal('toggle');
        }
    });
}

function tbl_modificar_manga() {
    $.ajax({
        url: "tbl_mangas",
        type: 'POST',
        data: { ver_tabla_mod_user: "ok" },
        success: function(resp) {
            document.getElementById("tabla_mangas").innerHTML = resp;
            $(document).ready(function() {
                $('#example').DataTable();
            });
        }
    });
}


function modificar_info_manga() {
    var datos = new FormData();
    datos.append("nombre_manga_mod", $('#nombre_manga_mod').val());
    datos.append("precio_mod", $('#precio_mod').val());
    datos.append("cantidad_mod", $('#cantidad_mod').val());

    $.ajax({
        url: "tbl_mangas",
        type: 'POST',
        processData: false,
        contentType: false,
        data: datos,
        success: function(resp) {
            var resultado = JSON.parse(resp);
            if (resultado.status == 1) {
                alert("manga modificado exitosamente")
                ver_tabla()
            } else {
                alert("error al modificar el manga")
            }
        }
    });
}