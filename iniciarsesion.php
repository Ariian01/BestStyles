<?php
session_start();

if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];

	$ok=0;
	$archivo=fopen('./database/Registro.dat','r+') or die ("Error de apertura de archivo.");
	while(!feof($archivo) and $ok==0)
	{
	    $linea=fgets($archivo);
		$datos=explode("|",$linea);
		$name= $datos[0];
		$mail= $datos[1];
		$active=$datos[2];
		$role=$datos[3];
		$pass=$datos[4];

	   	if($email==$mail and md5(trim($password))==trim($pass))
	   	{
			if ($active=1){
				$ok=1;	 
			}
			else{
				$ok=2;
			}
	  	}
	}


	if ($ok==0)
	{
		$errormsg = "Los datos no coinciden";	
	}
	elseif ($ok==2)
	{
		$errormsg = "Usuario Inactivo";		
	}
	else
	{
		$_SESSION['usr_role'] = $role;
		$_SESSION['usr_name'] = $name;
		echo'<script type="text/javascript"> alert("Conexion exitosa. Bienvenido/a" );
			window.location.href="index.php";</script>';
	}

}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<TITLE>IniciarSesion</TITLE>
<link rel="stylesheet" type="text/css" href="css/iniciarsesion.css">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/jpg" href="img/icon.jpg" >
<script src="validar.js"></script>
</head>
<body ><div class="fondo">
<br>
<a align=right href="index.php" class="button ">&#8962;</a>
<a align=right href="register.php" class="button right">Registrarse</a>
<a align=right href="iniciarsesion.php" class="button right">Iniciar Sesion</a>
<a align=right href="carrito.php" class="button right">&#128722;</a>
<div align="center">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="index.php" ><img  src="img/BS.jpg"  width="150" height="100"></a>
</div>
</header>
<div class="login-box">
	<form  method="post">

	<h1>
	<FONT COLOR="#FFAE00" > Iniciar Sesion</h1>
	 <label for="Nombre de Usuario">Nombre de Usuario(Correo)</label>
	 <input type="text" placeholder="Ingrese su Correo" name="email" required>
	 <label for="Contraseña">Contraseña</label>
	 <input type="password" placeholder="Ingrese su Contraseña" name="password" required>
<br><br>
	 <input type="submit" name="login" value="Ingresar" >
	 <a href="register.php"><h2> ¿No te registraste aún? Registrate!</a></h2>
	</form>
</div>
</div>
<div class="fondo3" align="center"><a><h3> Medios de pago &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Envíos por </h3>
<img  src="img/mediosdepago.png"  width="250" height="120">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img  src="img/correoarg.png"  width="100" height="80">&nbsp&nbsp<img  src="img/oca.png"  width="100" height="80">
<br><br><h3>
<a> Contactos:11 1234-5678</a><br>
<a>arianmeccia@hotmail.com</a><br>
<a href="https://goo.gl/maps/A7YcFo72hfts3gYA6">ISFT 177, Libertad, Buenos Aires</a></a><br></h3>
</body>
</html>

	