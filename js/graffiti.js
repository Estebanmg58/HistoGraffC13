$(document).ready(function() {

    $('.btnBorrar').on('click',function(e){
        if(confirm('¿Esta seguro que desea eliminar el grafiti?')){
            var id = $(this).attr('id');
            var update = "";
            $.ajax({
                method: 'POST',
                url: '../PhpCod/eliminarGraffiti.php',
                dataType: 'JSON',
                data:{id:id,update:update},
                success: function (data) {
                    if(data.ok != null){
                        swal("Borrado!", "Correctamente!","success");
                    setTimeout(function(){
                        var url = "/HistoGraffC13/PhpCod/Graffiti.php";
                        $(location).attr('href',url);
                    },1000);
                    }
                    if(data.error != null){
                        swal("Error!", "No Se Pudo Eliminar!", "error");
                    }
                },

                error:function(err){
                    console.log(err);
                }

            })
        }
    })

    $(".formulario").click(function (){
        let id = $(this).data('id')

        $.ajax({
            data: { id },
            type: "POST",
            url: "editarGraffiti.php",
            success: function (response) {
                let json = JSON.parse(response)

                json.forEach(json => {
                    $("#id").val(json.id),
                    $("#nombreGraffiti").val(json.nombre),
                    $("#descripcion").val(json.descripcion),
                    $("#foto").val(json.fotoGraffiti)
                })
            }
        })

    })


})
