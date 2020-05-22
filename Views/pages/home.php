<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>"Pide presupuestos | habitissimo"</title>
	<meta name="description" content="New budget request">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://es.habcdn.com/static/root/favicon-32x32.png" rel="icon" type="image/x-icon" sizes="32x32" />

	<!-- STYLES -->
	<link rel="stylesheet" type="text/css" href="/assets/css/budget.css"/>
	<link rel="stylesheet" type="text/css" href="/assets/css/form.css"/>
	<link
		rel="stylesheet" 
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
		crossorigin="anonymous">
	<script
		src="https://code.jquery.com/jquery-3.5.0.js"
		integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
		crossorigin="anonymous"></script>
	<script 
		src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
		crossorigin="anonymous"></script>
	<script 
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
		crossorigin="anonymous"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>
	<div class="menu">
		<ul>
			<li class="logo"><a href="https://www.habitissimo.es" target="_blank"><img height="30" title="Habitissimo - Reformas y Servicios para el Hogar"
																					alt="Visit habitissimo.es official website!"
																					src="/assets/images/web-logo.png"/></a>
			</li>
			<li class="menu-toggle">
				<button onclick="toggleMenu();">&#9776;</button>
			</li>
			<li class="menu-item hidden">
				<a href="https://www.habitissimo.es/presupuestos/nuevo?service=reformas-viviendas&source_page=quotation-add#1" target="_blank">Reformas</a>
			</li>
			<li class="menu-item hidden">
				<a href="https://www.habitissimo.es/presupuestos/nuevo?service=construccion-casas&source_page=quotation-add#1" target="_blank">Construcción</a>
			</li>
			<li class="menu-item hidden">
				<a href="https://www.habitissimo.es/presupuestos/nuevo?service=mudanzas&source_page=quotation-add#1" target="_blank">Mudanzas</a>
			</li>
			<li class="menu-item hidden">
				<a href="https://www.habitissimo.es/presupuestos/nuevo?service=pintores&source_page=quotation-add#1" target="_blank">Pintores</a>
			</li>
			<li class="menu-item hidden">
				<a href="https://www.habitissimo.es/presupuestos/nuevo?service=albaniles&source_page=quotation-add#1" target="_blank">Albañiles</a>
			</li>
			<li class="menu-item hidden">
				<a href="https://www.habitissimo.es/presupuestos/nuevo?service=paquetistas&source_page=quotation-add#1" target="_blank">Paquetistas</a>
			</li>
			<li class="menu-item hidden">
				<a href="https://www.habitissimo.es/presupuestos/seleccionar_categoria" target="_blank">Otros</a>
			</li>
		</ul>
	</div>

	<div class="heroe">

		<h1>Pide presupuestos</h1>

		<h2>Construcciones y reformas, instalaciones, limpieza, mudanzas, arquitectos y más…</h2>

	</div>

</header>

<!-- CONTENT -->


<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img alt="Otros servicios" src="https://es.habcdn.com/images/landing/quotation2/others/otros.jpg" height="150" width="150">
				<div class="heroe">
					<h2>1.- Cuéntanos qué necesitas</h2>
					<h2>2.- Recibe hasta 4 presupuestos de tu zona</h2>
					<h2>3.- Compara ofertas y elige (o no) la mejor</h2>
				</div>
			</div>
			<div class="col-sm-6">
