<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <?php include("head.php");?>
    </head>
    <body>

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                            <?php
			if(isset($_POST['input'])){
				$idproducto= $_POST['idproducto'];
				$producto= $_POST['producto'];
				$stock= $_POS['stock'];
$precio= $_POS['precio'];
				var_dump($_POST['idproducto']);
				exit;	
		

			$insert=true;
			if($insert){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido agregados correctamente.</div>';
			}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo registrar los datos.</div>';
			}
				
			}
			?>
            
            <blockquote>
            Agregar  Producto
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="registro.php" method="POST" >
						 <!--SEXO|TIPO|DOCUMENTO|APELLIDO|NOMBRE|DOMICILIO|MESA|ESCUELA -->
										<div class="control-group">
											</div>
												

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      
    </body>
