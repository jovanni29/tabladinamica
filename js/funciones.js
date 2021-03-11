function agregardatos(marca, modelo, no_serie, estado) {

    cadena="marca="+marca+"&modelo="+modelo+"&no_serie="+no_serie+"&estado="+estado;

    $.ajax({
        type: "POST",
        url: "php/agregarDatos.php",
        data: cadena,
        success: function (r) {
            if (r== 1) {
                alertify.error("ocurrio un error");
                
            } else {
                $('#tabla').load('componentes/tabla_monitor.php');
                $('#modalNuevo').modal("hide");
                alertify.success("Agregado con exito");
            }
        }
    });

}

function agregaform(datos){
    d=datos.split('||');
    $('#idmonitor').val(d[0]);
    $('#marcau').val(d[1]);
    $('#modelou').val(d[2]);
    $('#no_serieu').val(d[3]);
    $('#estadou').val(d[4]);
}

function actualizaDatos(){
    id=$('#idmonitor').val();
    marca=$('#marcau').val();
    modelo=$('#modelou').val();
    no_serie=$('#no_serieu').val();
    estado=$('#estadou').val();

    cadena= "id="+id+"&marca="+marca+"&modelo="+modelo+"&no_serie="+no_serie+"&estado="+estado;
}