<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('img/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Creative Agency</title>

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
								<h2> <img src="{{asset('img/logo1.jpg')}}" alt="HTML5 Icon" style="width:50px;height:60px;"> VillaMedica</h2> 
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="{{url('/')}}">Inicio</a></li>
							   <!-- Dropdown -->							
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>

      <section class="service-area pt-100 pb-150" id="service">
      
      
        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <h3 align="center">Lista Deudores Cuota Extraordinarios</h3>
                    </br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="20px">Monto</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Nro Depa</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($extraordinarios as $extra)
                                <tr>
                                    <td>{{ $extra->monto }}</td>
                                    <td>{{ $extra->fecha }}</td>
                                    <td>{{ $extra->estado }}</td>
                                    <td>{{ $extra->num_depa}}</td>
                                    <td>{{ $extra->nombres}}</td>
                                    <td>{{ $extra->apellidos}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>

            <div class="col-md-6">
                <div class="table-responsive">
                    <h3 align="center">Lista Deudores de Cuota Ordinarios</h3></br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="20px">Monto</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Nro Depa</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ordinarios as $ordi)
                                <tr>
                                    <td>{{ $ordi->monto }}</td>
                                    <td>{{ $ordi->fecha }}</td>
                                    <td>{{ $ordi->estado }}</td>
                                    <td>{{ $ordi->num_depa}}</td>
                                    <td>{{ $ordi->nombres}}</td>
                                    <td>{{ $ordi->apellidos}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
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