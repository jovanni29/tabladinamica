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