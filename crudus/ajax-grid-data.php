<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
//ini_set(“memory_limit”,”128M“);

// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

//var_dump($requestData);
$columns = array( 
// datatable column index  => database column name
	0 => 'sexo',
    1 => 'tipo_dni', 
	2 => 'documento',
	3 => 'apellido',
    4 => 'nombre',
	5 => 'domicilio',
	6 => 'mesa',
	7 => 'escuela',  
);


// getting total number records without any search

$data = array();
$totalData = count(file("Padron.csv")); 
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

if( !empty($requestData['search']['value']) ) {

	$myfile = fopen("Padron.csv", "r") or die("No se puede abrir el archivo!");
	while(!feof($myfile)) {
		$nestedData=array(); 
		$linea = fgets($myfile);
		$datos=explode("|", $linea);
		if (strcmp(trim($datos[2]),trim($requestData['search']['value']))==0 or strcmp(substr(trim($datos[4]),0,strlen(trim($requestData['search']['value']))),trim($requestData['search']['value']))==0 or strcmp(substr(trim($datos[3]),0,strlen(trim($requestData['search']['value']))),trim($requestData['search']['value']))==0 )
		{
			$nestedData[] = $datos[0]; //sexo
			$nestedData[] = $datos[1]; //tipo dni
			$nestedData[] = $datos[2];//documento
			$nestedData[] = $datos[3];//apellido
			$nestedData[] = $datos[4];//nombre
			$nestedData[] = $datos[5];//domicilio
			$nestedData[] = $datos[6];//mesa
			$nestedData[] = $datos[7];//escuela
			
			$nestedData[] = '<td><center>
							<a href="editar.php?id='.$datos[2].'"  data-toggle="tooltip" title="Editar datos" class="btn btn-sm btn-info"> <i class="menu-icon icon-pencil"></i> </a>
							<a href="index.php?action=delete&id='.$datos[2].'"  data-toggle="tooltip" title="Eliminar" class="btn btn-sm btn-danger"> <i class="menu-icon icon-trash"></i> </a>
							</center></td>';		
			
			$data[] = $nestedData;
		}
	}
	fclose($myfile);
}
else
{
	
	$myfile = fopen("Padron.csv", "r") or die("No se puede abrir el archivo!");
	$registro=0;
	$tope=1;
	while(!feof($myfile)) {
		$nestedData=array(); 
		$linea = fgets($myfile);
		$datos=explode("|", $linea);

		if ($registro>=intval($requestData['start']) and $tope<=intval($requestData['length']))
		{
			$nestedData[] = $datos[0]; //sexo
			$nestedData[] = $datos[1]; //tipo dni
			$nestedData[] = $datos[2];//documento
			$nestedData[] = $datos[3];//apellido
			$nestedData[] = $datos[4];//nombre
			$nestedData[] = $datos[5];//domicilio
			$nestedData[] = $datos[6];//mesa
			$nestedData[] = $datos[7];//escuela
			
			$nestedData[] = '<td><center>
							<a href="editar.php?id='.$datos[2].'"  data-toggle="tooltip" title="Editar datos" class="btn btn-sm btn-info"> <i class="menu-icon icon-pencil"></i> </a>
							<a href="index.php?action=delete&id='.$datos[2].'"  data-toggle="tooltip" title="Eliminar" class="btn btn-sm btn-danger"> <i class="menu-icon icon-trash"></i> </a>
							</center></td>';		
			
			$data[] = $nestedData;
			$tope++;
		}
		$registro++;
	}
	fclose($myfile);

}

$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

			
echo json_encode($json_data);  // send data as json format

?>
