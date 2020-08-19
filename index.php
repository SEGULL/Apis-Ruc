<?php 

include 'conexion.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- CDN DE DISEÑO WEB -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col s12 l12 m12">
			<div class="card">
				<div class="card-title">
					<h4>CONSULTANDO A LA RENIEC</h4>
				</div>
				<div class="card-content">
					<form action="consulta.php" method="POST">
						<input type="number" name="dni" value="" placeholder="">
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>
               
</body>
</html>