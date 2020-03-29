function validarLoginGuia(){

    var usuarioGuia, claveGuia; 

    usuarioGuia = document.getElementById("usuarioGuia").value;
    claveGuia = document.getElementById("claveGuia").value;

    username = /\w+@\w+\.+[a-z]/;

    if (usuarioGuia === "" || claveGuia === ""){
        alert ("Ingrese el usuario y contraseña");
        return false;
    }
    else if (!username.test(usuarioGuia)){
        alert ("El correo no es válido");
        return false;
    }
    else if (claveGuia.length < 6){
        alert ("La contraseña debe tener por lo menos 6 caracteres");
        return false;
    }
}