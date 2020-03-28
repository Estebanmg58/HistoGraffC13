function validar(){
    
    var id, nombre, apellido, cel, email, cantidad, fecha, hora;

    id = document.getElementById("id").value;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    cel = document.getElementById("cel").value;
    email = document.getElementById("email").value;
    cantidad = document.getElementById("cantidad").values;
    fecha = document.getElementById("fecha").value;
    hora = document.getElementById("hora").value;

    expresion = /\w+@\w+\.+[a-z]/; 

    if (id === "" || nombre === "" || apellido === "" || cel === "" || email === "" || cantidad === "" || fecha === "" || hora === ""){
        alert ("Todos los campos son obligatorios");
        return false;
    }
    else if (id.length > 11){
        alert ("La identificación excede el número de caracteres");
        return false;
    }
    else if (nombre.length > 35){
        alert ("El nombre excede el número de caracteres");
        return false;
    }
    else if (apellido.length > 35){
        alert ("El apellido excede el número de caracteres");
        return false;
    }
    else if (isNaN(cel)){
        alert ("Asegúrese de escribir bien el teléfono");
        return false;
    }
    else if (cel.length < 10 || cel.length > 15){
        alert ("El teléfono no es correcto");
        return false;
    }
    else if (!expresion.test(email)){
        alert ("El correo no es válido");
        return false;
    }
    else if (email.length > 45){
        alert ("El email excede los caracteres");
        return false;
    }
    else if (cantidad.length > 2){
        alert ("La cantidad excede los caracteres");
        return false;
    }
}