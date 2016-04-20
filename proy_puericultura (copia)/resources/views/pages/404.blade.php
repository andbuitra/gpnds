<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header>
		@include('includes.header')
	</header>

	<div  class= "container">
		<div class="row">
	        		<div class="col-sm-12 wow fadeInLeftBig">
					
						<img src="assets/img/bg_404.png"/>
	            		<h1>La pagina que estaba buscando <span class="violet">no pudo ser encontrada</h1>
						
	            		
	            	</div>
					
					
		</div>
		
		
		</div>
		
		<div class="testimonials-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 testimonials-title wow fadeIn">
		                <h2>Busca en la pagina</h2>
		            </div>
	            </div>
	            <div class="row">
				<div = class="col-sm-12 wow fadeInLeftBig">
					
						<div class= "buscar-box-text buscar-box-text-subscribe">
						<form role="form" action="assets/buscar.php" method="post">
		                    	<div class="form-group">
		                    		<label class="sr-only" for="buscar-elemento">Pagina</label>
		                        	<input type="text" name="buscar" placeholder="O busca tambien en la pagina..." class="buscar-elemento" id="buscar-elemento">
		                        </div>
		                        <button type="submit" class="btn">Buscar</button>
		                </form>
						</div>
					</div>
	                
	            </div>
	        </div>
        </div>
	<!-- FIN CUERPO DE LA PÁGINA -->

	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>