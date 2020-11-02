<?php
session_start();
/*
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion	= '')
{
	echo 'Acceso no autorizado';
	die ();
}
*/
?>
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
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="index.php" ><img  src="img/BS.jpg"  width="250" height="170"></a>
<br>
<div class="fondo" align="center">
<a href="contacto.php"> Contacto </a><a> &nbsp &nbsp|&nbsp &nbsp </a> <a href="info.html"> +info </a><a>&nbsp &nbsp|&nbsp &nbsp</a><a href="crudusuario.php"> Usuarios </a> </div> <br>
<div class="social-bar">
<a href="https://www.instagram.com/" class="icon icon-instagram" target="_blank"> </a>	
<a href="https://www.facebook.com/" class="icon icon-facebook2" target="_blank"> </a>
<a href="https://web.whatsapp.com/" class="icon icon-whatsapp" target="_blank"> </a>
</div><br>
  <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                            <?php
								error_reporting(E_ALL);

             					if(isset($_GET['action']) == 'delete'){
									$id_delete = intval($_GET['id']);

									$delete = false;
									$myfile = fopen("./database/Register.csv", "r") or die("No se puede abrir el archivo!");
									$bkfile = fopen("./database/Register.dat", "w+") or die("No se puede abrir el archivo de trabajo!");
									while(!feof($myfile)) {
										$linea = fgets($myfile);
										$datos=explode(";", $linea);
										
										if (strcmp(trim($datos[2]),trim($_GET['id']))!=0 )
										{
											fputs($bkfile,$linea);
										}
										else{
											$delete = true;
										}
									}
									fclose($myfile);
									fclose($bkfile);
									if (unlink ("./database/Register.csv")){
										rename ("./database/Register.dat","./database/Register.csv");	
									}
									else{
										echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error en el borrado, error en proceso de archivo..</div>';		
									}
							
									if($delete){
											echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Los datos han sido eliminados correctamente.</div>';
									}else{
											echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar el Votante '.$id_delete.'</div>';
									}
								}					
							?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon-user"></i> Usuarios </h3> 
						 
                        </div>
						
                        <div class="panel-body">
							<div class="pull-right">
								<a href="registro.php" class="btn btn-sm btn-primary">Nuevo Usuario</a>
							</div><br>
							<hr>
                                    <table id="lookup" class="table table-bordered table-hover">  
	                                   <thead bgcolor="#eeeeee" align="center">
                                        <tr>
	                                    <th>Nombre</th>
	                                    <th>Correo </th>
                                        <th>Password </th>
	                                    <th class="text-center"> Acciones </th> 
                                       </tr>
                                      </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
        <script src="datatables/jquery.dataTables.js"></script>
        <script src="datatables/dataTables.bootstrap.js"></script>
        <script>
        $(document).ready(function() {
				var dataTable = $('#lookup').DataTable( {
					
				 "language":	{
					"sProcessing":     "Procesando...",
					"sLengthMenu":     "Mostrar _MENU_ registros",
					"sZeroRecords":    "No se encontraron resultados",
					"sEmptyTable":     "Ningún dato disponible en esta tabla",
					"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
					"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
					"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
					"sInfoPostFix":    "",
					"sSearch":         "Buscar:",
					"sUrl":            "",
					"sInfoThousands":  ",",
					"sLoadingRecords": "Cargando...",
					"oPaginate": {
						"sFirst":    "Primero",
						"sLast":     "Último",
						"sNext":     "Siguiente",
						"sPrevious": "Anterior"
					},
					"oAria": {
						"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
						"sSortDescending": ": Activar para ordenar la columna de manera descendente"
					}
				},

					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"ajax-grid-data.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".lookup-error").html("");
							$("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">Sin datos, para ser mostrados en el datatable</th></tr></tbody>');
							$("#lookup_processing").css("display","none");
							
						}
					}
				} );
			} );
        </script>

<div class="fondo2"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="fondo3" align= "center">
<a><h3><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Medios de pago &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Envíos por &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Contactos:</h3>
<img  src="img/mediosdepago.png"  width="250" height="120">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img  src="img/correoarg.png"  width="100" height="80">&nbsp&nbsp<img  src="img/oca.png"  width="100" height="80"></a></div></form>

</body>
<html>
