function agregardatos(nombregab, marcagab, modelogab, tipogab, noseriegab, estadogab, comentariogab,arquitecturaso,
    versionso,idso,marcapro,modelopro,frecuenciapro,nucleospro,hilospro,marcaram,tiporam,tamanoram,frecuenciaram){
        cadena="nombre_gab="+nombregab+"&marca_gab="+marcagab+"&modelo_gab="+modelogab+"&tipo_gab="+tipogab
        +"&noserie_gab="+noseriegab+"&estado_gab="+estadogab+"&comentario_gab="+comentariogab+"&arquitectura_so="+arquitecturaso
        +"&version_so="+versionso+"&id_so="+idso+"&marca_pro="+marcapro+"&modelo_pro="+modelopro+"&frecuencia_pro="+frecuenciapro+
        "&nucleos_pro="+nucleospro+"&hilos_pro="+hilospro+"&marca_ram="+marcaram+"&tipo_ram="+tiporam+"&tamano_ram="+tamanoram+
        "&frecuencia_ram="+frecuenciaram;

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

    function agregaform(datos){
        d=datos.split('||');
        $('#idcomputadora').val(d[0]);
        $('#nombre_gabu').val(d[1]);
        $('#marca_gabu').val(d[2]);
        $('#modelo_gabu').val(d[3]);
        $('#tipo_gabu').val(d[4]);
        $('#noserie_gabu').val(d[5]);
        $('#estado_gabu').val(d[6]);
        $('#comentario_gabu').val(d[7]);
        $('#arquitectura_sou').val(d[8]);
        $('#version_sou').val(d[9]);
        $('#id_sou').val(d[10]);
        $('#marca_prou').val(d[11]);
        $('#modelo_prou').val(d[12]);
        $('#frecuencia_prou').val(d[13]);
        $('#nucleos_prou').val(d[14]);
        $('#hilos_prou').val(d[15]);
        $('#marca_ramu').val(d[16]);
        $('#tipo_ramu').val(d[17]);
        $('#tamano_ramu').val(d[18]);
        $('#frecuencia_ramu').val(d[19]);
  
        

    }