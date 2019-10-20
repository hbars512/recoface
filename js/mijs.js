function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [08, 7, 39, 46, 13, 32];
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}

function solonum() {
    if (event.keyCode < 48 || event.keyCode > 57 || event.keyCode == 13)
        event.returnValue = false;
}
function validarEmail() {
    var email = document.getElementById("email").value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (email.length == 0) {
        document.getElementById("equis").className = "";
    } else if (!expr.test(email)) {
        document.getElementById("valid_email").className = "input-group has-error has-feedback";
        document.getElementById("equis").className = "glyphicon glyphicon-remove form-control-feedback";
        //alert("Error: La dirección de correo " + email + " es incorrecta.");
        return false;
    } else {
        document.getElementById("equis").className = "";
        return true;
    }
}
function quitar_clase() {
    document.getElementById("valid_email").className = "input-group";
}