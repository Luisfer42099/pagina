

		<!--barra lateral-->
			<div class="row">
				<div class="col-md-3">
				<aside id="lateral">
					<div id="carrito" class="block_aside">
						<h3>Mi carrito</h3>
						<ul>
							<?php $stats = Utils::statsCarrito() ?>
							<li><a href="<?=base_url?>Carrito/index"><div class="icon-shopping-bag">Productos (<?=$stats['count'] ?>)</div></a></li>
							<li><a href="<?=base_url?>Carrito/index"><div class="icon-dollar">Total: $<?=$stats['total']?></div></a></li>
							<li><a href="<?=base_url?>Carrito/index"><div class="icon-basket">Ver el carrito</div></a></li>
						</ul>
					</div>
					<div id="login" class="block_aside">
						<?php if(!isset($_SESSION['identity'])): ?>
							<h3>Entrar a la web</h3>
							<form action="<?=base_url?>Usuario/login" method="post">
								<label for="email">Email</label>
								<input type="email" name="email">
								<label for="password">Contraseña</label>
								<input type="password" name="password">
								<input type="submit" value="Enviar" ame="">
							</form>
						<?php else: ?>
							<h3><?=$_SESSION['identity']->nombre; ?> <?=$_SESSION['identity']->apellidos; ?></h3>
						<?php endif; ?>
						<ul>
							<?php if(isset($_SESSION['admin'])): ?>
							<li><a href="<?=base_url?>Pedido/gestion">Gestionar pedidos</a></li>
							<li><a href="<?=base_url?>Categoria/index">Gestionar categorias</a></li>
							<li><a href="<?=base_url?>Producto/gestion">Gestionar productos</a></li>
						<?php endif; ?>
						<?php if(isset($_SESSION['identity'])): ?>
							<li><a href="<?=base_url?>Pedido/mis_pedidos">Mis pedidos</a></li>
							<li><a href="<?=base_url?>Usuario/logout">Cerrar sesion</a></li>
							<?php else: ?>
								<li><a class="icon-child" href="<?=base_url?>Usuario/registro">Registrate aqui</a></li>
								<button class="switch" id="switch">
									<span> <i class="icon-sun"></i> </span>
									<span> <i class="icon-moon"></i> </span>
								</button>
								
						<?php endif; ?>
						</ul>
					</div>
				</aside>
				
				</div>
				<div class="col-md-9">
					
			<!--contenido central-->
			<div id="central">