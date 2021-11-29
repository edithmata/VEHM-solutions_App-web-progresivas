function login_admin() {
    if ($('#user_admin').val() == "") {
        var msg = "ESCRIBE TU USUARIO";
        error_alert(msg);
    } else if ($('#admin_pass').val() == "") {
        var msg = "ESCRIBE TU CONTRASEÑA";
        error_alert(msg);
    } else {
        var datos = new FormData()
        datos.append("usuario", $('#user_admin').val());
        datos.append("user_pass", $('#admin_pass').val());
        $.ajax({
            url: "ctrl_login",
            type: "POST",
            processData: false,
            contentType: false,
            data: datos,
            success: function(respuesta) {
                var resultado = JSON.parse(respuesta);
                if (resultado.status == 1) {
                    var msg = "¡HOLA, BIENVENIDO!";
                    success_alert(msg);
                } else {
                    var msg = "USUARIO y/o CONTRASÑA INCORRECTOS";
                    error_alert(msg);
                }
            }
        });
    }




}


function success_alert(msg) {
    document.getElementById("texto_bienvenida").innerHTML =
        msg;
    $('#alerta_login_correcto').addClass('show');
    setTimeout(function() {
        $('#alerta_login_correcto').attr("class", "alert alert-success alert-dismissible fade");
    }, 2000)
}

function error_alert(msg) {
    document.getElementById("texto_error").innerHTML = msg;
    $('#alerta_login_error').addClass('show');
    setTimeout(function() {
        $('#alerta_login_error').attr("class", "alert alert-danger alert-dismissible fade");
    }, 2000)
}