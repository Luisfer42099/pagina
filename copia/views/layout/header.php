<!doctype html>
<html lang="en">

<head>
    <title>Ingenieria Web Colombia - Lideres en el desarrollo de software y mantenimiento de equipos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!--Google fonts-->
	<link rel="shortcut icon" type="image/x-icon" href="http://ingenieria-web-colombia.com/assets/img/favicon.ico"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"/>
	<link rel="stylesheet" href="<?=base_url?>assets/css/fontello.css"/>
	<script src="<?= base_url ?>assets/js/elevator.js"></script>
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css"/>

</head>

<body class="dark">
	<!--<div id="contenedor_carga">
		<div id="carga"></div>
	</div>-->
	<div id="particles-js"></div>
	<?php $Categorias = Utils::showCategorias(); ?>
		<!--cabecera-->
		<!--CARRUSEL-->
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?=base_url?>/assets/img/internet.png" class="d-block w-100 img-fluid" alt="imagenes ingenieria web colombia" >
              </div>
              <div class="carousel-item">
                <img src="<?=base_url?>/assets/img/AdobeStock_126016889apaisado.png" class="d-block w-100 img-fluid" alt="imagenes ingenieria web colombia" >
              </div>
              <div class="carousel-item">
                <img src="<?=base_url?>/assets/img/Desarrollo-Web-1288x724.png" class="d-block w-100 img-fluid" alt="imagenes ingenieria web colombia" >
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
		  <nav class="menu-fixed navbar navbar-expand-lg navbar-light sticky-xxl-top sticky-xl-top sticky-top">
		 	<div class="container-fluid">
              <a class="navbar-brand logo" href="<?=base_url?>"><img src="<?=base_url?>/assets/img/Logo/ingenieria.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
			  <a href="<?=base_url?>" class="titulo1"><h1 class="titulo">Ingenieria Web Colombia |</h1></a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?=base_url ?>">Inicio</a>
                  </li>
                  <?php while ($cat = $Categorias->fetch_object()) : ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url ?>Categoria/ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>

                    </li>
                  <?php endwhile; ?>
                </ul>
              </div>
            </div>
          </nav>
          <div class="conta">
            <input type="checkbox" id="btn-mas">
            <div class="redes">
              <a href="" class="icon icon-facebook"></a>
              <a href="" class="icon icon-instagram"></a>
              <a href="" class="icon icon-youtube-play"></a>
              <a href="https://api.whatsapp.com/send?phone=+573232023510" class="icon icon-whatsapp"></a>
            </div>
            <div class="btn-mas">
              <label for="btn-mas" class="icon-up-hand"></label>
            </div>
          </div>
		<div class="container">
		<div id="content">