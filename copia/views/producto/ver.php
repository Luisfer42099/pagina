<?php if(isset($product)): ?>
	<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url ?>">Inicio</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?=$product->nombre?></li>
		</ol>
	</nav>
	<h1 class="titulo"><?=$product->nombre ?></h1>
	<div id="detail-product">
		<div class="image">
			<?php if($product->imagen != null): ?>
				<img src="<?=base_url?>uploads/images/<?=$product->imagen?>" class="img-fluid">
				<p class="price">$<?=$product->precio?></p>
				<a href="<?=base_url?>Carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
			<?php else: ?>
				<img src="<?=base_url?>assets/img/camiseta.png">
			<?php endif; ?>
			</div>
			<div class="data">
				<p class="description"><?=$product->descripcion?></p>
			</div>
		</div>
		<?php else: ?>
			<h1>El producto no existe</h1>
		<?php endif; ?>