function agregarDatos(nombregab, marcagab, modelogab, tipogab, noseriegab, estadogab, comentariogab,arquitecturaso,
    versionso,idso,marcapro,modelopro,frecuenciapro,nucleospro,hilospro,marcaram,tiporam,tamanoram,frecuenciaram){
        cadena="nombre_gab="+nombregab+"&marca_gab="+marcagab+"&modelo_gab="+modelogab+"&tipo_gab="+tipogab
        +"&noserie_gab="+noseriegab+"&estado_gab="+estadogab+"&comentario_gab="+comentariogab+"&arquitectura_so"+arquitecturaso
        +"&version_so"+versionso+"&id_so"+idso+"&marca_pro"+marcapro+"&modelo_pro"+modelopro+"&frecuencia_pro"+frecuenciapro+
        "&nucleos_pro"+nucleospro+"&hilos_pro"+hilospro+"&marca_ram"+marcaram+"&tipo_ram"+tiporam+"&tamano_ram"+tamanoram+
        "&frecuencia_ram"+frecuenciaram;

        $.ajax({
            type: "POST",
            url: "php/computadora/agregarDatos.php",
            data: cadena,
            success: function (r) {
                if (r== 1) {
                    alertify.error("ocurrio un error");
                    
                } else {
                    $('#tabla').load('componentes/tabla_cpu.php');
                    $('#modalNuevo').modal("hide");
                    alertify.success("Agregado con exito");
                }
            }
        });

    }