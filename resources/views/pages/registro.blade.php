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
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                        	<form role="form" action="" method="post" class="registration-form">
                        		
                        		<fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>¡Regístrate!</h3>
		                            		<p>Es gratis.</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="nombre">Nombre</label>
				                        	<input type="text" name="nombre" placeholder="Nombre" class="form-first-name form-control" id="nombre">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="email">Email</label>
				                        	<input type="email" name="email" placeholder="Correo electrónico" class="form-first-name form-control" id="email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="password">Dinos algo sobre ti</label>
				                        	<input type="password" name="password" placeholder="Contraseña" class="form-password form-control" id="password">
				                        </div>
				                        <button type="submit" class="btn">Siguiente</button>
				                    </div>
			                    </fieldset>		                    
			                    
			                    
		                    
		                    </form>
		                    
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
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/steps.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>