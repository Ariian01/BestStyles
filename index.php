<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<TITLE>Best Styles</TITLE>
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" type="text/css" href="css/proyecto.css">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/jpg" href="img/icon.jpg" >
</head>
<body>
<div class="fondo2">
<header>`
<a align=right href="index.php" class="button ">&#8962;</a>
<?php if (isset($_SESSION['usr_role'])) { ?>
		<a  align=right class="button right" href="logout.php">Log Out</a>
				<a align=right class="button right">Logeado como <i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></b></i></a>
			
				<?php } else { ?>
<a align=right href="register.php" class="button right">Registrarse</a>
<a align=right href="iniciarsesion.php" class="button right">Iniciar Sesion</a>
				<?php } ?>
<div align="center">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="index.php" ><img  src="img/BS.jpg"  width="250" height="170"></a>
<br>
<div class="fondo" align="center">
<a href="contacto.php"> Contacto </a><a> &nbsp &nbsp|&nbsp &nbsp </a> <a href="info.html"> +info </a> 
<br><br><br>
</div>
<div class= "slider" align="center">
	<ul>
		<li><img  src="img/remerablanca.jpg"  alt=""></li>
		<li><img  src="img/remeranegra.jpg"  alt=""></li>
		<li><img  src="img/remeraamarilla.jpg"  alt=""></li>
		<li><img  src="img/BS.jpg"  alt=""></li>
	</ul>
</div>
<div class="social-bar">
<a href="https://www.instagram.com/" class="icon icon-instagram" target="_blank"> </a>	
<a href="https://www.facebook.com/" class="icon icon-facebook2" target="_blank"> </a>
<a href="https://web.whatsapp.com/" class="icon icon-whatsapp" target="_blank"> </a>
</div><br>
<div class="fondo2">
<tr>
<td><a href="remeras.php" ><img  src="img/remeras.jpg"  width="450" height="250"></a>
</td>
</tr>
<br>
<div class="fondo3" align="center"><a><h3> Medios de pago &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Envíos por </h3>
<img  src="img/mediosdepago.png"  width="250" height="120">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img  src="img/correoarg.png"  width="100" height="80">&nbsp&nbsp<img  src="img/oca.png"  width="100" height="80">
<br><br><br><br><h3>
<a> Contactos:11 1234-5678</a><br>
<a>arianmeccia@hotmail.com</a><br>
<a href="https://goo.gl/maps/A7YcFo72hfts3gYA6">ISFT 177, Libertad, Buenos Aires</a></a><br></h3>
<df-messenger
              intent="Bienvenido"
              chat-title="Chat de Bienvenida "
              agent-id="8f7741e4-04b5-424b-801c-d16499bc5a40"
              language-code="es"
              ></df-messenger>
</body>
<html>

