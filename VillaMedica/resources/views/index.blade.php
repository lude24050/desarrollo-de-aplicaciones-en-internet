	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Villa Medica</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!-- CSS ============================================= -->
			<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/jquery.DonutWidget.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('css/main.css')}}">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="index.html">
								<h2> <img src="img/logo1.jpg" alt="HTML5 Icon" style="width:50px;height:60px;"> VillaMedica</h2> 
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">

							@if (Auth::guest())
								<li><a href="#home">Inicio</a></li>
								<li><a href="#service">Nosotros</a></li>
								<li><a href="#project">Ambiente</a></li>
								<li><a href="{{url('/deudores/listarDeudores')}}">Deudores</a></li>
								<li><a href="{{ route('login') }}">Iniciar sesión </a></li>
							@else
									
									@if (Auth::user()->tipo == "administrador")
										<li><a href="#home">Inicio</a></li>
										<li><a href="#service">Nosotros</a></li>
										<li><a href="#project">Ambiente</a></li>
										<li><a href="{{url('/deudores/listarDeudores')}}">Deudores</a></li>
										<li><a href="{{url('/home')}}">administrar</a></li>
										<li>
											<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
												Salir
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</li>

									@elseif (Auth::user()->tipo == "propietario")
										<li><a href="#home">Inicio</a></li>
										<li><a href="#service">Nosotros</a></li>
										<li><a href="#project">Ambiente</a></li>
										<li><a href="{{url('/deudores/listarDeudores')}}">Deudores</a></li>
										<li><a href="{{url('/infoPro', Auth::user()->id) }}">Mi informacion</a></li>
										<li>
											<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
												Salir
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</li>

									@elseif (Auth::user()->tipo == "empleado")
										<li><a href="#home">Inicio</a></li>
										<li><a href="#service">Nosotros</a></li>
										<li><a href="#project">Ambiente</a></li>
										<li><a href="{{url('/deudores/listarDeudores')}}">Deudores</a></li>
										<li><a href="{{url('/infoEmple', Auth::user()->id) }}">Mi informacion</a></li>
										<li>
											<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
												Salir
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</li>
										
									@endif
							   <!-- Dropdown -->
							@endif							
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="img/header-bg.jpg">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen  d-flex align-items-center justify-content-end">
						<div class="banner-content col-lg-6 col-md-12">
							<h1>
								Junta de propietarios  <br>
								<span>Villa Medica</span> 					
							</h1>
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
		
			<!-- start service Area-->
			<section class="service-area pt-100 pb-150" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Juntos por Villa Medica</h1>
								<p>Este nuestro hogar y todos somos una familia con un solo ideal "vivir mejor"</p>
							</div>
						</div>
					</div>	
					<div align="center">
						<EMBED class="embed-responsive" src="video/presentacion.mp4" height="450" width="850"></EMBED>
					</div>
					<div class="row">
						<div class="sigle-service col-lg-3 col-md-6">
							<h4>Fundación</h4>
							<p>
							26 de Junio de 2002
							</p>
						</div>
						<div class="sigle-service col-lg-3 col-md-6">
							<h4>Eventos anuales</h4>
							<p>
							  Año nuevo, Señor de los Milagros, navidad, halloween, aniversario de villa medica, fiesta Familiar.
							</p>
						</div>
						<div class="sigle-service col-lg-3 col-md-6">
							<h4>Ubicación</h4>
							<p>
						      Nos ubicamos en la ciudad de arequipa, destrito José Luis Bustamente Rivero costado de la universidad Alas Peruanas.
							</p>
						</div>
						<div class="sigle-service col-lg-3 col-md-6">
							<h4>Deportes</h4>
							<p>
								Futbol, Ajedres, Tenis
							</p>
						</div>																		

					</div>
				</div>	
			</section>
			<!-- Start project Area -->
			<section class="project-area section-gap" id="project">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Zonas recreativas de VillaMedica</h1>
								<p>"Un Mundo para vivir es mundo para todos, por ello cuida y ama nuetro medio ambiente"</p>
							</div>
						</div>
					</div>						
					<div class="row">

					<div class="active-works-carousel mt-40">
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/1.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Zonas infantiles</h6>
									<p>Zona recreativas para los niños de VillaMedica</p>
								</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/4.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Zonas recreativas.</h6>
									<p>Una de varias zonas recreativas para los niños de VillaMedica.</p>
								</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/2.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Zonas exclusivas para los residentes</h6>
									<p>Una de varias zonas que la villa ofrece para los residentes.</p>
								</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/3.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Estacionamiento organizado.</h6>
									<p>Centro de estacionamiento de automóviles de Villa Medica.</p>
								</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/5.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Zonas de esparcimiento deportivo</h6>
									<p>Areas destinadas a la practica del deporte y los buenos valores.</p>
								</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/6.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Campos Deportivos</h6>
									<p>La cancha de tenis. Una de varias zonas de esparcimento para los residentes.</p>
								</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/7.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Ambiente agradable.</h6>
									<p>Ofrecemos un ambiente comodo y seguro dentro de nuestras areas e instalaciones</p>
								</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/8.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Buena ubicacion</h6>
									<p>La villa se encuentra cerca de varias universidades, institutos y centros educativos reconocidos.</p>
								</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/9.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Buena Organizacion</h6>
									<p>La villa cuenta con accesos bien ubicados y organizados en caso de emergencias.</p>
								</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/11.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Excelente infraestructura</h6>
									<p></p>
								</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/12.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Rodeado de áreas verdes</h6>
								</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/16.jpeg" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Cancha de futbol</h6>
								</div>
							</div>
							<div class="item">
									<img class="img-fluid" src="img/fotosVillaMedica/18.jpg" alt="">
									<div class="caption text-center mt-20">
										<h6 class="text-uppercase">Actividades promoviendo la practica del futbol</h6>
										
									</div>
							</div>
							<div class="item">
								<img class="img-fluid" src="img/fotosVillaMedica/19.jpg" alt="">
									<div class="caption text-center mt-20">
											<h6 class="text-uppercase">Actividades Deportivas en temporada de vacaciones</h6>
											<p>La villa cuenta con actividades que promueven a los mas jovenes el ejercicio y el deporte</p>
										</div>
							</div>
					</div>
				</div>	
			</section>

			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row footer-bottom d-flex justify-content-between">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="https://www.facebook.com/Residencial-Villa-M%C3%A9dica-1166265403418475/"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
					<a href="https://www.contadorvisitasgratis.com" title="contador de visitas Villa Medica"><img src="https://counter8.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=sw2565p5hcm5ggflq9un6nnb2dzl6953" border="0" title="contador de visitas Villa Medica" alt="contador de visitas"></a>
				</div>
			</footer>
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/parallax.min.js"></script>			
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.DonutWidget.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>			
			<script src="js/main.js"></script>	
		</body>
	</html>