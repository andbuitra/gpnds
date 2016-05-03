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
                        <h1>Puericultura /</h1>
                        <p>Informate.</p>
                    </div>
                </div>
            </div>
        </div>
	
        <div class="about-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 about-us-text wow fadeInLeft">
	                    <h3>&iquest;Que es puericultura?</h3>
	                    <p>
	                    	Tambien se la puede definir como la ciencia o disciplina, que aplicando cuidados, conocimientos medicos, higienicos y reglas, tiene como finalidad beneficiar y ayudar al desarrollo del ni&ntilde;o, desde su gestacion hasta los primeros a&ntilde;os, en los planos psiquico, fisico y social.


	                    </p>
						<img src="assets/img/info/1.jpg"></img>
	                    <h3>&iquest;Por que es importante?</h3>
	                    <p>
						Cuando nacemos, lo hacemos perteneciendo a un Grupo Social Primario con el que interactuaremos por el resto de nuestras vidas, La Familia, que es la encargada de brindarnos los cuidados basicos en cuanto a Alimentacion, Higiene y Abrigo sin los cuales nos seria imposible poder sobrevivir o subsistir en los primeros meses y a&ntilde;os de vida, ademas de que se nos instruye acerca de los Limites y Libertades que tendremos en la vida, dandonos educacion y estimulos para desarrollar nuestras Facultades Cognitivas.


						Su importancia tiene una gran cantidad de campos de aplicacion, desde las Politicas de Estado que deben garantizar y apuntar a los cuidados de los mas peque&ntilde;os, hasta el cumplimiento de los Derechos del Ni&ntilde;o en lo que respecta a su formacion y el transito a ser los individuos adultos del ma&ntilde;ana.


						
	                    </p>
	                   <img src="assets/img/info/2.jpg"></img>
	                </div>
	            </div>
	        </div>
        </div>


							 <div class="work-container">
	        					<div class="container">
						        	<div class="row">
							            <div class="col-sm-12 work-title wow fadeIn">
							                <h2>Dejanos un comentario.</h2>
							            </div>
							         </div>
							    </div>
							</div>

        					<div id="disqus_thread"></div>
								<script>
									/**
									* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
									* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
									*/
									/*
									var disqus_config = function () {
									this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
									this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
									};
									*/
									(function() { // DON'T EDIT BELOW THIS LINE
									var d = document, s = d.createElement('script');

									s.src = '//gpndschat.disqus.com/embed.js';

									s.setAttribute('data-timestamp', +new Date());
									(d.head || d.body).appendChild(s);
									})();
								</script>
								<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
	
	
	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>