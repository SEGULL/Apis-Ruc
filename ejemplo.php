<?php  

error_reporting(0);
	//DECLARANDO LA VARIABLE
$ruc_consulta = htmlentities($_GET['ruc']);
	//USANDO LA API
	$url = "https://dniruc.apisperu.com/api/v1/ruc/".$ruc_consulta."?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImFsZWphbmRyby5jYW5haHVpcmUuaGlsYXJpQGdtYWlsLmNvbSJ9.7K-XaAUtQUZlouz1k3kRA9nRr-LRrCXjxhCY1PXaUa4";
    // SACANDO LA INFORMACION ARCHIVO
	$archivo_json = file_get_contents($url);
	//  CONVERCION JSON
	$datos = json_decode($archivo_json);
    //EXTRAER LOS DATOS POR VALORES DESDE JSON
	$ruc_valido = $datos->{'ruc'};
	$nombre_empresa = $datos->{'razonSocial'};
	$tipo_negocio = $datos->{'tipo'};
	$direccion = $datos->{'direccion'};
?>
<div class="container">
	<div class="row">
		<div class="col s8 l8 m8">
			<div class="card">
				<div class="card-title">
					<?php 
						if ($ruc_valido) {
							echo "SU RUC ES VALIDO :".$ruc_valido;
							header("Refresh:10;URL=index.php");
						}else{
							echo "SU RUC NO ES VALIDO VUELVA A CONSULTARLO";
							header("Refresh:10;URL=index.php");
						}
					?>
				</div>
				<div class="card-content">
					<?php if ($ruc_valido) {
						echo "EL RUC LE PERTENECE A ".$nombre_empresa." DE TIPO DE NEGOCIO ".$tipo." con direccion ".$direccion;
						header("Refresh:10;URL=index.php");
					}else{
						echo "SU RUC NO ES VALIDO VUELVA A CONSULTARLO";
						header("Refresh:10;URL=index.php");
					} 
					 ?>
				</div>
			</div>
		</div>
	</div>
</div>
