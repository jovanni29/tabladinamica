<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "php/login/scripts.php"; ?>
    <title>Registro</title>
</head>
<body style="background-color: rgb(221, 221, 221)">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-danger">
				<div class="panel panel-heading">Registro de usuario</div>
				<div class="panel panel-body">
					<form id="frmRegistro">
						<label>Nombre</label>
					<input type="text" class="form-control input-sm" id="nombre" name="">
					<label>Apellido</label>
					<input type="text" class="form-control input-sm" id="apellido" name="">
					<label>Usuario</label>
					<input type="text" class="form-control input-sm" id="usuario" name="">
					<label>Password</label>
					<input type="text" class="form-control input-sm" id="password" name="">
					<p></p>
					<span class="btn btn-primary" id="registrarNuevo">Registrar</span>
					</form>
					<div style="text-align: right;">
						<a href="index.php" class="btn btn-default">Regresar al Login</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/login/registro.php",
						data:cadena,
						success:function(r){
                            console.log(r);
                           
							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
                                $('#frmRegistro')[0].reset();
								alertify.success("Usuario registrado con exito");
							}else{
								
								
                                alertify.error("Error al registrar usuario");
							}
						}
					});
		});
	});
</script>

