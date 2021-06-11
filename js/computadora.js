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
                    $('#tabla').load('componentes/tabla_cpu.php');
                    $('#modalNuevo').modal("hide");
                    alertify.success("Agregado con exito");
                    
                    
                } else {
                    alertify.error("ocurrio un error");
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

    function actualizaDatos(){
        id=$('#idcomputadora').val();
        nombre_gabu=$('#nombre_gabu').val();
        marca_gabu=$('#marca_gabu').val();
        modelo_gabu=$('#modelo_gabu').val();
        tipo_gabu=$('#tipo_gabu').val();
        noserie_gabu=$('#noserie_gabu').val();
        estado_gabu=$('#estado_gabu').val();
        comentario_gabu=$('#comentario_gabu').val();
        arquitectura_sou=$('#arquitectura_sou').val();
        version_sou=$('#version_sou').val();
        id_sou=$('#id_sou').val();
        marca_prou=$('#marca_prou').val();
        modelo_prou=$('#modelo_prou').val();
        frecuencia_prou=$('#frecuencia_prou').val();
        nucleos_prou=$('#nucleos_prou').val();
        hilos_prou=$('#hilos_prou').val();
        marca_ramu=$('#marca_ramu').val();
        tipo_ramu=$('#tipo_ramu').val();
        tamano_ramu=$('#tamano_ramu').val();
        frecuencia_ramu=$('#frecuencia_ramu').val();

        cadena= "id_computadora="+id+"&nombre_gab="+nombre_gabu+"&marca_gab="+marca_gabu+"&modelo_gab="+modelo_gabu+"&tipo_gab="
        +tipo_gabu+"&noserie_gab="+noserie_gabu+"&estado_gab="+estado_gabu+"&comentario_gab="
        +comentario_gabu+"&arquitectura_so="+arquitectura_sou+"&version_so="+version_sou+
        "&id_so="+id_sou+"&marca_pro="+marca_prou+"&modelo_pro="+modelo_prou+"&frecuencia_pro="
        +frecuencia_prou+"&nucleos_pro="+nucleos_prou+"&hilos_pro="+hilos_prou+"&marca_ram="+marca_ramu+"&tipo_ram="+
        tipo_ramu+"&tamano_ram="+tamano_ramu+"&frecuencia_ram="+frecuencia_ramu;

        $.ajax({
            type: "POST",
            url: "php/computadora/actualizaDatos.php",
            data: cadena,
            success: function (r) {
               
                if (r== 1) {
                    

                    $('#tabla').load('componentes/tabla_cpu.php');
                    $('#modalEdicion').modal("hide");
                    alertify.success("Actualizado con exito");
                    
                    
                   
                    
                } else {
                    console.log(r);
                    alertify.error("ocurrio un error");
                }
            }
        });


    }

    function preguntarSiNo(id){
        alertify.confirm('Eliminar datos', '¿Esta seguro de eliminar este registro?',
        function(){eliminarDatos(id)}
        ,function(){alertify.error('Se cancelo')});
       }

       function eliminarDatos(id){
        cadena= "id="+ id;
        $.ajax({
            type: 'POST',
            url: "php/computadora/eliminarDatos.php",
            data: cadena,
            success:function(r){
                if (r== 1) {
                    $('#tabla').load('componentes/tabla_cpu.php');
                   
                    alertify.success("Eliminado con exito");
                    
                    
                } else {
                    alertify.error("ocurrio un error");
                }
            }
    
        });
    }
       