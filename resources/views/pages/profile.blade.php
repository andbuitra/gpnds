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
			  
			
			  <div class="row-aside">
			  
				<li>
				  <div class="profile-a">
				  	
					
					<img id="myImg" src="assets/img/deadpool.jpg" width="300" height="200">



						<!-- The Modal -->
						<div id="myModal" class="modal">
						  
						  

						  <div class= "modal-content">						  
						  </div>
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
					<input type="text" class="user" id="user" placeholder="Current name...">
					<label for="user">Tu apellido</label>
					<input type="text" class="user" id="user" placeholder="Current lastname...">
				  </div>
				  </li>
				<li>
				  <label for="ema">Correo electronico</label>
				  <input type="email" placeholder="Current email" id="ema">
				  
				</li>
				<li>
					<label for="ema">Contraseña</label>
				  <input type="password" placeholder="Contraseña actual" id="ema">
				</li>
				
				<li>
				  <label for="select">Idiomas</label>
				  <select>
					<option>Español</option>
					<option>Ingles</option>
				  </select>
				</li>
				<li>
				  <label for="select">Pais</label>
				  <select>
					<option>España</option>
					<option>Francia</option>
				  </select>
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
		<script src="assets/js/profileimage.js"></script>
		<script src="assets/js/work.js"></script>
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
