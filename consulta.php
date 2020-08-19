<?php 
$dni = htmlentities($_POST['dni']);

error_reporting(0);

$url = "https://dniruc.apisperu.com/api/v1/dni/".$dni."?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InNlZ2NhbmFodWlyZUBnbWFpbC5jb20ifQ.wEYHsSfNliepUjte7SjQVBPxEEB_4TDy9ZEZ_SwArJM";

$jsonpractica=file_get_contents($url);

$datos=json_decode($jsonpractica);

$dni=$datos->{'dni'};
$nombres=$datos->{'nombres'};
if ($nombres) {
	echo "EL DNI QUE CONSULTO LE PERTENECE A : ".$nombres;
}else{
	echo "No existe datos del DNI ingresado.";
}




 ?>
