<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
	<h1>Tu pedido se ha confirmado</h1>
	<p>
		Tu pedido ha sido guardado con exito, una vez que realices la transferencia bancaria a la cuenta 77652327296342 con el coste del pedido, sera procesado y enviado
	</p>
	
	<br>
	<?php if(isset($pedido)): ?>
		<h3>Datos del pedido</h3>
		<h4>Numero de pedido: <?=$pedido->id?></h4>
		<h4>Total a pagar: $<?=$pedido->coste?></h4>
		<h4>Productos:</h4>
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
			<!--<form action="<?=base_url.'Pedido/transferencia'?>" method="POST">
			    <br>
			    <br>
			    Total a pagar: $<?=$pedido->coste?><br>
			    <label for="numero">Numero de tarjeta</label>
	<input type="text" name="numero">
	<label for="nombre">Nombre y Apellido como figura en la tarjeta</label>
	<input type="text" name="nombre" required>

	<label for="">Fecha de vencimiento</label>
	<label for="dia">Dia</label>
	<select name="dia">
	    <option value="">Seleccione una opcion</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
	</select>
	<label for="mes">Mes</label>
	<select name="mes">
	    <option value="">Seleccione una opcion</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
	</select>
	<label for="codigo">Codigo de seguridad</label>
	<input type="text" name="codigo">
	<input type="submit" value="Hacer transferencia" name="">
</form> -->
<!--
<a href="https://biz.payulatam.com/B0d10d4849D0AEE"><img src="http://www.payulatam.com/img-secure-2015/boton_pagar_mediano.png"></a>
			<script
    src="<?=base_url?>"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>
  
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="SPVS3XAAE6SQQ">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
  
   -->

<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
      },
      createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: '1'
                  }
              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
      }
  }).render('#paypal-button-container');
</script>
		<?php endif; ?>
		<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
			<h1>Tu pedido no ha podido procesarse</h1>
			<?php endif; ?>