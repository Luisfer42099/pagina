<?php if(isset($categoria)): ?>
	<h1><?=$categoria->nombre ?></h1>
	<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url?>">Inicio</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?=$categoria->nombre?></li>
		</ol>
	</nav>
	<?php if($productos->num_rows == 0): ?>
		<p>No hay productos para mostrar</p>
	<?php else: ?>
		<?php while($product = $productos->fetch_object()): ?>
			<div class="product">
				<a href="<?=base_url?>Producto/ver&id=<?=$product->id ?>">
					<?php if($product->imagen != null): ?>
						<img src="<?=base_url?>uploads/images/<?=$product->imagen?>" class="img-fluid">
						<?php else: ?>
							<img src="<?=base_url?>assets/img/camiseta.png">
						<?php endif; ?>
						<h2><?=$product->nombre?></h2>
					</a>
					<p>$<?=$product->precio?></p>
					<a href="<?=base_url?>Carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php else: ?>
			<h1>La categoria no existe</h1>
		<?php endif; ?>