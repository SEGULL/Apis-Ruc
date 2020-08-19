


<div class="container">
	<div class="row">
		<div class="col s6 l6 m6">
			<div class="card">
				<div class="card-title">
					<h4 class="left-align" >REGISTRO DE PRODUCTOS</h4>
				</div>
				<div class="card-content">
					<form action="funcion.php" method="post" accept-charset="utf-8">
							<input type="text" name="nombreproducto" value="" placeholder="Ingrese su nombre de producto">
							<input type="number" name="precio" value="" placeholder="Ingrese el Precio">

							<input type="date" name="fechavencimiento" class="datepicker" value="" placeholder="">

							<input type="text" name="descripcion" value="" placeholder="Ingrese la descripcion">

							<input type="number" name="stock" value="" placeholder="Ingrese el Stock">

							<input type="date" name="fecharegistro" value="" placeholder="" >

							<input type="submit" class="btn waves-effect waves-light" name="REGISTRE" value="REGISTRE">
						</form>
				</div>
				<div class="card-action">
					<h6>Registro de datos de productos</h6>
				</div>
			</div>
		</div>
		<div class="col s6 l6 m6">
			<div class="card">
				<div class="card-title">
					<h4> Tabla de Productos</h4>
				</div>
				<div class="card-content">
					<table>
						<caption>LISTADO DE PRODUCTOS</caption>
						<thead>
							<tr>
								<th>#</th>
								<th>NOMBRE PRODUCTO</th>
								<th>PRECIO</th>
							</tr>
						</thead>
						<tbody>
<?php 
$sel = $con->query("SELECT * FROM productos");

while ($var = $sel->fetch_assoc()) {
?>
							<tr>
								<td><?php  echo  $var['idproductos']  ?></td>
								<td><?php  echo  $var['nombreproducto'] ?></td>
								<td><?php  echo  $var['precio'] ?></td>
							</tr>
<?php }  ?>

						</tbody>
					</table>


				</div>
				<div class="card-action">
					<h6>Lista de Productos</h6>
				</div>
			</div>
		</div>
	</div>

</div>


<script>
    $('.datepicker').datepicker();
</script>

