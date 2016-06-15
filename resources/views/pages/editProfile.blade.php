<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header>
		@include('includes.header')
	</header>
	<div class="page-title-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 wow fadeIn">
					<i class="fa fa-pencil"></i>
					<h1>Configuraci&oacute;n /</h1>
					<p>Configure edite, o cambie cualquier cosa de su perfil.</p>
				</div>
			</div>
		</div>
	</div>
	<form class="" action="/perfil/editar" method="post">

		{!! csrf_field() !!}

	<div class="wrapper">
		<div class="row-aside">
			<li>
				<div class="profile-a">
					<img id="myImg" src="{{$user['user_image_uri']}}" width="300" height="200">
					<!-- The Modal -->
					<div id="myModal" class="modal">
						<div class= "modal-content"></div>
						<div id="caption"></div>
						<div class="top animated bounceIn">
							<div id="popup">
								<span class="message">
									Cambia tu imagen de perfil<br />
									<small>Arrastra la imagen que quieras en el espacio de abajo</small>
								</span>
							</div>
						</div>

						<div id="containerpop">
							<div class="box">
								<div class="progress"></div>
							</div>
							<div class="v-align">
								<!--<svg>
								<path d="M25,75a50,50 0 1,0 100,0a50,50 0 1,0 -100,0"></path>
							</svg>-->
							<div class="arrow"></div>
						</div>
						<img id="image-holder-b">
					</div>
					<div align="center" class="stupid-btn">
						<button class="btn btn-info">Guardar imagen</button>
					</div>
					<span class="close">×</span>
				</div>
				<label for="user">Tu nombre</label>
				<input type="text" class="user" name="name" id="user" placeholder="Tu nombre" required="required" value="{{$user['name']}}">
			</div>
		</li>
		<li>
			<label for="ema">Correo electronico</label>
			<input type="email" placeholder="Tu email" name="email" id="ema" required="required" value="{{$user['email']}}">
		</li>
		<div class="contenido">
			<h4>Información General</h4>
			<li>
				<label for="about">Sobre mí</label>
				<textarea name="about" rows="8" cols="40">{{$user['about']}}</textarea>
			</li>
		</div>
		<button type="submit" class="btn btn-info">Salvar cambios</button>
	</div>
</div>
</form>
<script src="/assets/js/jquery-1.11.1.min.js"></script>
<script src="/assets/js/profileimage.js"></script>
<script src="/assets/js/work.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="/assets/js/jquery.backstretch.min.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/retina-1.1.0.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/flexslider/jquery.flexslider-min.js"></script>
<script src="/assets/js/jflickrfeed.min.js"></script>
<script src="/assets/js/masonry.pkgd.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="/assets/js/jquery.ui.map.min.js"></script>
<script src="/assets/js/scripts.js"></script>

<footer>
	@include('includes.footer')
</footer>
</body>
</html>
