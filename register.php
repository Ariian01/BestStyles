<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<TITLE>Registrarse</TITLE>
<style>
.error {
background-color: #FF9185;
font-size: 15px;
padding: 10px;
}
.correcto {
background-color: #A0DEA7;
font-size: 15px;
padding: 10px;
}	
</style>
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" type="text/css" href="css/registrarse.css">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/jpg" href="img/BS.png" >
<body>
<div class="fondo">
<br><header>
<a align=right href="index.php" class="button ">&#8962;</a>
<a align=right href="register.php" class="button right">Registrarse</a>
<a align=right href="iniciarsesion.php" class="button right">Iniciar Sesion</a>
<a align=right href="carrito.php" class="button right">&#128722;</a>
<div align="center">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="index.php" ><img  src="img/BS.jpg"  width="180" height="120"></a>
<br>
<div class="fondo2" align="center">
<a href="contacto.php"> Contacto </a><a> &nbsp &nbsp|&nbsp &nbsp </a> <a href="info.html"> +info </a> 
</div>

<?php
session_start();
error_reporting(E_ALL);

$error = false;

if (isset($_POST['signup'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$terminosycond =$_POST['terminosycond'];
	

	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "ERROR El nombre debe contener solo letras.";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "ERROR Ingresa un correo electrónico válido.";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "ERROR La contraseña debe tener un mínimo de 6 caracteres.";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "ERROR Las contraseñas no coinciden";
	}
	if(!$terminosycond) {
	}
	if (!$error) {

	$ok=0;
	$archivo=fopen('./database/Registro.dat','r+') or die ("Error de apertura de archivo, Intente mas tarde");
	while(!feof($archivo) and $ok==0)
	{
	     $linea=fgets($archivo);
		 $datos=explode("|",$linea);
		 $lastname= $datos[0];
		 $mail= $datos[1];
		 $active=$datos[2];
		 $role=$datos[3];
		 $passwd=$datos[4];
		 
		 
	   	if($email==$mail) 
	   	{
			$ok=1;
	  	}
	}
	fclose($archivo);

	if($ok == 1)
	{ 
echo " Ya existe un usuario registrado con ese correo ";
$errormsg = "Error de registro. Vuelve a intentarlo más tarde.";
	}
	else
	{
		$activ = 0;

		$rol=1;
			
			$archivo=fopen('./database/Registro.dat','a+') or die ("Error en registro.");
			fputs($archivo, $name."|".$email."|".$activ."|".$rol."|".md5($password)."\n");
			fclose($archivo);
			$successmsg = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    <strong>EXITO.!</strong> ¡Registrado exitosamente!
			  </div>
			  ';
	} 

	}
}
?>

			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><br>
				<fieldset>
					<div > <legend><H3>REGISTRARSE</H3></legend>
						<label for="name">Nombre</label>
						<input type="text" name="name" placeholder="Ingrese su Nombre" required value="<?php if($error) echo $name; ?>" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					<div class="form-group"><br>
						<label for="name">Correo</label>
						<input type="email" name="email" size=28 placeholder="Ingrese su Correo Electrónico" required value="<?php if($error) echo $email; ?>" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div><br>

					<div class="form-group">
						<label for="name">Contraseña</label>
						<input type="password" name="password" placeholder="Ingrese su Contraseña" required class="form-control" /><br>
						<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
					</div>

					<div class="form-group"><br>
						<label for="name">Ingrese de nuevo la contraseña</label>
						<input type="password" name="cpassword" placeholder="Confirme la Contraseña" required class="form-control" /><br><br>
						<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
					</div>
					
					<div class="checkbox">
					    <label>
					      <input type="checkbox" name="terminosycond" id="terminosycond" required=""> Acepto todos los 
							<a href="terminosycond.html " target="_blank"> Terminos y condiciones</a>
							 
							<br>
							<span class="text-danger"><?php if (isset($terminosycond_error)) echo $terminosycond_error; ?></span>
					    </label>
					</div><br>

					<div class="form-group">
						<input type="submit" name="signup" value="Registrar" class="btn btn-primary" />
					</div><br>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></
	<div ><br>
		<div>	
		Ya estas registrado? <a href="iniciarsesion.php">Inicia Sesion!</a>
		<br><br>
		<a href="#" >
		<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Descargar PDF
		</a>
	    </ul>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        <!--button type="button" class="btn btn-primary">Guardar Cambios</button-->
      </div>


<script>
	//Modal terminos y condiciones
	$('#TernimosCondiciones').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	})
</script>

<div class="fondo3" align="center">
<div class="fondo3" align="center"><a><h3> Medios de pago &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Envíos por </h3>
<img  src="img/mediosdepago.png"  width="250" height="120">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img  src="img/correoarg.png"  width="100" height="80">&nbsp&nbsp<img  src="img/oca.png"  width="100" height="80">
<br><br><h3>
<a> Contactos:11 1234-5678</a><br>
<a>arianmeccia@hotmail.com</a><br>
<a href="https://goo.gl/maps/A7YcFo72hfts3gYA6">ISFT 177, Libertad, Buenos Aires</a></h3>
</body>
</html>