<h1 class="titulo">Algunos de nuestros productos</h1>
<br>
<?php while($product = $productos->fetch_object()): ?>
	
	<div class="product">
		<div class="card" style="width: 18rem;">
			<a href="<?=base_url?>Producto/ver&id=<?=$product->id ?>">
			<?php if($product->imagen != null): ?>
				<figure class="figura">
				<img src="<?=base_url?>uploads/images/<?=$product->imagen?>" class="card-img-top" alt="...">
				<?php else: ?>
					<img src="<?=base_url?>assets/img/camiseta.png">
				<?php endif; ?>
			
				<div class="capa">
                <h3><?=$product->nombre?></h3>
                <p>
					<?=$product->precio?>
				</p>
				</div>
			</figure>
			<div class="card-body">
				<a href="<?=base_url?>Carrito/add&id=<?=$product->id?>" class="btn btn-primary">Comprar</a>
			</div>
		</div>
	</div>

	<?php endwhile; ?>
	
</div>
</div>
</div>