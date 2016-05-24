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


			  <div class="wrapper">

			  <aside>
				<nav class="nav-aside">
				  <li class="perfil"><i class="fontawesome-user"></i>Perfil</li>
				  <li class="Contraseña"><i class="fontawesome-lock"></i>Contraseña</li>
				  <li class="Seguridad"><i class="fontawesome-eye-open"></i>Seguridad y privacidad</li>
				  <li class="Movil"><i class="fontawesome-envelope-alt"></i>Movil y correo</li>
				  <li class="widgets"><i class="fontawesome-list-ul"></i>Widgets</li>
				  <li class="Diseño"><i class="fontawesome-dashboard"></i>Diseño</li>
				  <li class="ban"><i class="fontawesome-minus-sign"></i>Cuentas bloqueadas</li>
				</nav>
			  </aside>
			  <div class="row-aside">
				<li>
				  <div class="profile-a">
					<img src="{{$user_image_uri}}" class="img-circle">
					<label for="user">Tu nombre</label>

					<input type="text" class="user" id="user" placeholder="Escribe aquí tu nombre" required="required" value="{{$name}}">
				  </div></li>
				<li>
				  <label for="ema">Correo electronico</label>
				  <input type="email" placeholder="Escribe aquí tu email" id="ema" value="{{$email}}">
				</li>
				<div class="contenido">
				  <h4>Contenido</h4>
				  <ul align="left">
					<li><input type="checkbox">Marcar como posible material sensible el contenido que publico</input></li>
					<li><input type="checkbox">Mostrar aviso al visitar posible contenido sensible.</input></li>
				  </ul>
				</div>
				<button class="btn btn-info">Salvar cambios</button>
			  </div>
			  </div>
		<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>

		<footer>
		@include('includes.footer')
	</footer>

</body>
</html>
