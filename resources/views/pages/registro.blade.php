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

                        	<form role="form" method="post" class="registration-form">
														{!! csrf_field() !!}
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
				                        	<input type="text" name="name" placeholder="Nombre" class="form-first-name form-control" id="nombre" value="{{old('name')}}">
				                        </div>
																<div class="form-group">
																	<label  class="sr-only" for="email">Email</label>
																	<input type="email" name="email" placeholder="Email" class="form-email form-control" id="email" required value="{{old('email')}}">
																</div>
																<div class="form-group">
																	<label class="sr-only" for="password">Contraseña</label>
																	<input type="password" name="password" placeholder="Contraseña" required class="form-password form-control">
																</div>
																<div class="form-group">
																	<label for="repassword" class="sr-only">Confirma tu contraseña</label>
																	<input type="password" name="repassword" placeholder="Confirma tu contraseña" required class="form-password form-control">
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
