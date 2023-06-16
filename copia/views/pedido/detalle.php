<h1>Detalle del pedido</h1>

<?php if(isset($pedido)): ?>
	<?php if(isset($_SESSION['admin'])): ?>
	<h3>Cambiar estado del pedido</h3>
	<form action="<?=base_url?>Pedido/estado" method="post">
		<input type="hidden" value="<?=$pedido->id?>" name="pedido_id">
		<select name="estado">
			<option value="confirm" <?=$pedido->estado == "confirm" ? 'selected' : '';?>>Pendiente</option>
			<option value="preparation" <?=$pedido->estado == "despacho" ? 'selected' : '';?>>En despacho</option>
			<option value="ready" <?=$pedido->estado == "ready" ? 'selected' : '';?>>Preparado para el envio</option>
			<option value="sended" <?=$pedido->estado == "sended" ? 'selected' : '';?>>Enviado</option>
		</select>
		<input type="submit" value="Cambiar estado">
	</form>
	<br>
<?php endif; ?>
	<h3>Direccion de envio</h3>
	<h4>Provincia: <?=$pedido->provincia?></h4> 
	<h4>Ciudad: <?=$pedido->localidad?></h4>
	<h4>Direccion: <?=$pedido->direccion?></h4>
	<br>

	<h3>Datos del pedido</h3>
	<h4>Estado: <?=Utils::showStatus($pedido->estado)?></h4>
	<h4>Numero de pedido: <?=$pedido->id?></h4>
	<h4>Total a pagar: $<?=$pedido->coste?></h4><br>
	<h3>Productos:</h3>
	<table>
		<tr>
			<th>Imagen</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Unidades</th>
		</tr>
		<?php while($producto = $productos->fetch_object()): ?>
			<tr>
				<td>
					<?php if($producto->imagen != null): ?>
						<img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" class="img_carrito">
						<?php else: ?>
							<img src="<?=base_url?>assets/img/camiseta.png" class="img_carrito">
						<?php endif; ?>
					</td>
					<td>
						<a href="<?=base_url?>Producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
					</td>
					<td>
						<?=$producto->precio?>
					</td>
					<td>
						<?=$producto->unidades?>
					</td>
				</tr>
			<?php endwhile; ?>
		</table>
		<?php endif; ?>