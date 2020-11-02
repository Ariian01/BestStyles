<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<TITLE>Best Styles</TITLE>
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" type="text/css" href="css/contacto.css">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/jpg" href="img/icon.jpg" >
</head>
<body>
<div class="fondo2">
<br>
<a align=right href="index.php" class="button ">&#8962;</a>
<?php if (isset($_SESSION['usr_role'])) { ?>
		<a  align=right class="button right" href="logout.php">Salir</a>
				<a align=right class="button right">Logeado como <i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></b></i></a>
			
				<?php } else { ?>
<a align=right href="register.php" class="button right">Registrarse</a>
<a align=right href="iniciarsesion.php" class="button right">Iniciar Sesion</a>
				<?php } ?>
<div align="center">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="index.php" ><img  src="img/BS.jpg"  width="250" height="170"></a>
<br>
<div class="fondo" align="center">
<a href="contacto.php"> Contacto </a><a> &nbsp &nbsp|&nbsp &nbsp </a> <a href="info.html"> +info </a></div> <br>
<div class="social-bar">
<a href="https://www.instagram.com/" class="icon icon-instagram" target="_blank"> </a>	
<a href="https://www.facebook.com/" class="icon icon-facebook2" target="_blank"> </a>
<a href="https://web.whatsapp.com/" class="icon icon-whatsapp" target="_blank"> </a>
</div><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="contact-box">
<form  action= "enviar.php" method="post" id="contacto">
	<h2>CONTACTO</h2><br>
	<input type= "text" name="nombre" placeholder="Ingrese su Nombre" required >
	<input type= "text" name="correo" placeholder="Ingrese su correo" required >
	<textarea name="mensaje" placeholder="Escriba su mensaje" required></textarea>
	<br>
	<input type= "submit" onclick="" value="Enviar" id="">
</div>
<div class="fondo2"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="fondo3" align= "center">
<a><h3><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Medios de pago &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Envíos por &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Contactos:</h3>
<img  src="img/mediosdepago.png"  width="250" height="120">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img  src="img/correoarg.png"  width="100" height="80">&nbsp&nbsp<img  src="img/oca.png"  width="100" height="80"></a></div></form>

</body>
<html>
