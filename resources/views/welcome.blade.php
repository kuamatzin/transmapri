<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/css/app.css" crossorigin="anonymous">
</head>

<body>
	<div id="load" style="background-color: white">
		<img src="images/logo.png" alt="" class="img-fluid mx-auto d-block" width="200px" style="padding-top: 300px">
	</div>
	<div id="contents">
		<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="images/logo.png" alt="Transmapri Logo" class="img-fluid wow animated bounceInLeft" width="200px">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 100px">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" style="padding-left: 60px" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" style="padding-left: 60px" href="#nosotros">Nosotros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" style="padding-left: 60px" href="/misionvision">Misión</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" style="padding-left: 60px" href="/misionvision">Visión</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" style="padding-left: 60px" href="#productos">Productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" style="padding-left: 60px" href="#contacto">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="home"></div>
		<div class="container">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="/images/backg2.png" alt="First slide" width="100%">
						<div class="carousel-caption d-none d-md-block">
							<h2>Transmapri fábrica de muebles médicos</h2>
							<p>Calle Acacias 123, Col. Bugambilias. Puebla, Pue.</p>
							<p>(222) 228 02 52 y 3 99 11 11</p>
							<br>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/images/backg11.png" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/images/backg3.png" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--<div class="info" id="nosotros" style="background-color: #F8F9FA">-->
			<div class="info" id="nosotros">
				<div class="container">
					<img src="images/logo.png" alt="Transmapri Logo" class="img-fluid mx-auto d-block wow animated bounceInLeft" width="400px">
					<br>
					<br>
					<p class="wow animated bounceInRight" style="text-align: justify;">
						En TRANSMAPRI FABRICA DE MUEBLES MEDICOS ﻿ le ofrecemos los productos más selectos y de mejor calidad a precios muy atractivos
						y economicos. Para nosotros, el cliente es lo primero: sólo estamos satisfechos cuando usted lo está también
					</p>
				</div>
			</div>
		</div>
		
		<!--
            <div class="vision" id="mision">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow animated bounceInLeft">
                            <div class="mision">
                                <img src="http://www.theaccessproject.org.uk/assets/mission-icon-8190a164112ab0806bead62560bc0850.png" alt="" class="img-fluid mx-auto d-block" width="90px"><br><br>
                                <h2 class="text-center" style="letter-spacing: 7.5px;">Misión</h2>
                                <br>
                                <p>
                                    Ofrecer productos de excelente <span style="color: #309B32">calidad</span>, teniendo personal capacitado y la mejor <span style="color: #309B32">tecnología</span> y maquinaria que satisfaga las necesidades del cliente.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 wow animated bounceInRight">
                            <div class="mision">
                                <img src="https://cdn4.iconfinder.com/data/icons/icoflat3/512/binocular-512.png" alt="" class="img-fluid mx-auto d-block" width="90px"><br><br>
                                <h2 class="text-center" style="letter-spacing: 7.5px;">Visión</h2>
                                <br>
                                <p>
                                    Ser una empresa altamente <span style="color: #309B32">competitiva</span> a nivel nacional con una amplia cartera de clientes, con personal altamente <span style="color: #309B32">capacitado</span> para llevar a cabo cualquier trabajo exigido por el cliente del ramo de mueble e instrumental médico. Contar con la mejor tecnología y maquinaria para poder <span style="color: #309B32">satisfacer</span> al máximo la necesidad del cliente en el menor <span style="color: #309B32">costo</span> y <span style="color: #309B32">tiempo</span> posible.
                                </p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->

		<div id="productos">
			<div class="container" style="padding-top: 100px" id="app">
				<h1 class="text-center wow animated bounceInDown" style="letter-spacing: 7.5px; color: #325081">PRODUCTOS</h1>
				<br>
				<br>
				<br>
				<products></products>
			</div>
		</div>

		<div class="container">
			<div class="container">
				<div class="ubicacion">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.2392600469884!2d-98.22225838504995!3d19.009175859009186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc09f00000001%3A0x4902298d44c85075!2sFabricante+de+Muebles+medicos!5e0!3m2!1sen!2smx!4v1510768633490"
					width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
				</div>
			</div>
			<br>
			<div class="contacto" id="contacto">
				<h2 class="text-center wow animated bounceInDown" style="letter-spacing: 7.5px;">CONTACTO</h2>
				<br>
				<div class="col-xs-12 contact-info">
					<span class="wow fadeInRight animated">
						<i class="fa fa-location-arrow icon"></i>Calle Acacias 123, Col. Bugambilias. Puebla, Pue.</span>
					<span class="wow fadeInRight animated">
						<i class="fa fa-envelope-o icon"></i> contacto@transmapri.com</span>
					<span class="wow fadeInRight animated">
						<i class="fa fa-phone icon"></i>(222) 228 02 52 y 3 99 11 11</span>
				</div>
				<br>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="contact-form">
							<form action="">
								<input type="text" name="nombre" class="form-control my-form wow animated bounceInRight" required="required" placeholder="Nombre">
								<br>
								<br>
								<input type="email" name="email" class="form-control my-form wow animated bounceInLeft" required="required" placeholder="Email">
								<br>
								<br>
								<textarea name="mensaje" class="form-control my-form wow animated bounceInRight" rows="3" required="required" placeholder="Mensaje"></textarea>
								<br>
								<br>
								<button type="submit" class="btn btn-primary mx-auto d-block wow animated bounceInLeft">ENVIAR MENSAJE</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<span class="text-muted">© 2017 TRANSMAPRI / All rights reserved</span>
			</div>
		</footer>
	</div>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/js/app.js"></script>
</body>

</html>
