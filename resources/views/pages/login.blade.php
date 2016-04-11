<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header>
		@include('includes.header')
	</header>

        <!-- Top content -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Grupo de Puericultura - Norte de Santander</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="index.html"><i class="fa fa-home"></i><br>Inicio</a>
						</li>
						<li>
							<a href="sobre.html"><i class="fa fa-globe"></i><br>Sobre nosotros</a>
						</li>
						<li>
							<a href="sobre.html"><i class="fa fa-list-alt"></i><br>Eventos</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-tasks"></i><br>Links de interes</a>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="https://scp.com.co/">Sociedad de pediatria de Colombia</a></li>
								<li><a href="www.acpp.com.co/">Pediatria y puericultua en Colombia</a></li>
							</ul>
							
						</li>
						<li>
							<a href="contact.html"><i class="fa fa-envelope"></i><br>Contacto</a>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-user"></i><br>Login <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#.html">Iniciar sesion</a></li>
								<li><a href="registro.html">Registrate</a></li>
							</ul>
							
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		
		
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Inicia sesion en nuestro sitio</h3>
                            		<p>Entra tu usuario/Correo y tu contraseña para iniciar sesion:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Usuario/Correo Electronico</label>
			                        	<input type="text" name="form-username" placeholder="Usuario..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Contraseña</label>
			                        	<input type="password" name="form-password" placeholder="Contraseña..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Iniciar Sesion!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...o puedes iniciar sesion con:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript 
		Se dejan a lo ultimo para que no se tarde la pagina en cargar
		-->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/background.js"></script>

	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>