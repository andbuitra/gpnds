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


					<img id="myImg" src="{{$user['user_image_uri']}}" width="300" height="200" class="target">



						<!-- The Modal -->
						<div id="myModal" class="modal">



						  <div class= "modal-content">
						  <div class="top animated bounceIn">

							  <div id="popup">
							    <span class="message">
							    Cambia tu imagen de perfil<br />

							    <img  src="{{$user['user_image_uri']}}" width="500" >

							  </span>

							  </div>

							</div>


						  <div  class="stupid-btn">
									<label for="file-upload" class="custom-file-upload">
							    	Cambiar Imagen
									</label>
									<input id="file-upload" type="file"/>
								</div>
						  </div>






							<span class="close">×</span>
						  </div>

					<label for="user">Tu nombre</label>
					<input type="text" class="user" id="user" value="{{$user['name']}}" placeholder="Current name...">

				  </div>
				  </li>
				<li>
				  <label for="ema">Correo electronico</label>
				  <input type="email" placeholder="Current email" value="{{$user['email']}}" id="ema">

				</li>
				<li>
					<label for="ema">Miembro desde</label>
				  <input type="text" value="{{$user['created_at']}}" placeholder="No hay información" id="ema">
				</li>

				<li>
				  <label for="about">Acerca de mí</label>
					@if($user['about'] === '')
							<textarea rows="8" cols="40" id="about">No se ha suministrado información</textarea>
					@else
				  	<textarea rows="8" cols="40" id="about">{{$user['about']}}</textarea>
					@endif
				</li>
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
