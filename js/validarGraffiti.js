function validarGraffiti(){
    var nombreGraffiti, descripcion;
    
    nombreGraffiti = document.getElementById['nombreGraffiti'].value;
    descripcion = document.getElementById['descripcion'].value;

    if (nombreGraffiti === "" || descripcion === ""){
        alert ("Todos los campos son obligatorios");
        return false;
    }

}