@extends('layouts.master')
@section('content')
<div class="slider-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 slider">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="assets/img/slider/1.jpg">
							<img src="assets/img/slider/1.jpg">
							<div class="flex-caption">
								Aprende sobre tecnicas para mejorar la crianza de tu hijo.
							</div>
						</li>
						<li data-thumb="assets/img/slider/2.jpg">
							<img src="assets/img/slider/2.jpg">
							<div class="flex-caption">
								Consejos sobre la comunicacion adecuada temprana.
							</div>
						</li>
						<li data-thumb="assets/img/slider/3.jpg">
							<img src="assets/img/slider/3.jpg">
							<div class="flex-caption">
								Manejo de enseñanza en las primeras etapas de crecimiento
							</div>
						</li>
						<li data-thumb="assets/img/slider/4.jpg">
							<img src="assets/img/slider/4.jpg">
							<div class="flex-caption">
								Dietas adecuadas para tu hijo, y maneras adecuadas a la hora de la alimentacion.
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Presentation -->
<div class="presentation-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 wow fadeInLeftBig">
				<h1>Nosotros somos el <span class="violet">Grupo de puericultura</span> de Norte de Santander</h1>
				<p>¿Quieres saber mas sobre la puericultura?</p>
			</div>
		</div>
	</div>
</div>

<!-- Services -->
<div class="services-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="service wow fadeInUp">
					<img src="assets/img/info/1.jpg"></img>
					<h3>¿Que es puericultura?</h3>
					<p>Tambien se la puede definir como la ciencia o disciplina, que aplicando cuidados, conocimientos medicos...</p>
					<a class="big-link-1" href="/puericultura">Leer mas</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="service wow fadeInDown">
					<img src="assets/img/info/2.jpg"></img>
					<h3>Preguntas frecuentes</h3>
					<p>Que preguntas mas frecuentes tienen nuestros usuarios sobre puericultura...</p>
					<a class="big-link-1" href="/info/preguntasFrecuentes">Leer mas</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="service wow fadeInUp">
					<img src="assets/img/info/3.jpg"></img>
					<h3>Consejos</h3>
					<p>Consigue consejos sobre puericultura, como llevarla a tu hogar...</p>
					<a class="big-link-1" href="#">Leer mas</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="service wow fadeInDown">
					<img src="assets/img/info/4.jpg"></img>
					<h3>Notas destacadas</h3>
					<p>Notas a destacar sobre el tema de puericultura, y nuestro grupo.</p>
					<a class="big-link-1" href="#">Leer mas</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Latest work -->
<div class="work-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 work-title wow fadeIn">
				<h2>Nuestro ultimo evento</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="work wow fadeInUp">
					<img src="assets/img/Info_sliders/1.jpg" alt="Lorem Website" data-at2x="assets/img/Info_sliders/1.jpg">
					<h3>Dia 1</h3>
					
					<div class="work-bottom">
						<a class="big-link-2 view-work" href="assets/img/Info_sliders/1.jpg"><i class="fa fa-search"></i></a>
						<a class="big-link-2" href="#"><i class="fa fa-link"></i></a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="work wow fadeInDown">
					<img src="assets/img/Info_sliders/2.jpg" alt="Ipsum Logo" data-at2x="assets/img/Info_sliders/2.jpg">
					<h3>Dia 2</h3>
					
					<div class="work-bottom">
						<a class="big-link-2 view-work" href="assets/img/Info_sliders/2.jpg"><i class="fa fa-search"></i></a>
						<a class="big-link-2" href="#"><i class="fa fa-link"></i></a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="work wow fadeInUp">
					<img src="assets/img/Info_sliders/3.jpg" alt="Dolor Prints" data-at2x="assets/img/Info_sliders/3.jpg">
					<h3>Dia 3</h3>
					
					<div class="work-bottom">
						<a class="big-link-2 view-work" href="assets/img/Info_sliders/3.jpg"><i class="fa fa-search"></i></a>
						<a class="big-link-2" href="#"><i class="fa fa-link"></i></a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="work wow fadeInDown">
					<img src="assets/img/Info_sliders/4.jpg" alt="Sit Amet Website" data-at2x="assets/img/Info_sliders/4.jpg">
					<h3>Dia 4</h3>
					
					<div class="work-bottom">
						<a class="big-link-2 view-work" href="assets/img/Info_sliders/4.jpg"><i class="fa fa-search"></i></a>
						<a class="big-link-2" href="#"><i class="fa fa-link"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Testimonials -->
<div class="testimonials-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 testimonials-title wow fadeIn">
				<h2>Consejos diarios</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 testimonial-list">
				<div role="tabpanel">
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="tab1">
							<div class="testimonial-image">
								<img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
							</div>
							<div class="testimonial-text">
								<p>	
									¿Sabes los beneficios de la lactancia materna para el niño?<br>
									La leche materna contiene todo lo que el niño necesita durante los seis primeros meses de vida, favoreciendo su crecimiento, maduración y salud.

									Muchos de los componentes de la misma se encargan de protegerle mientras su sistema inmunitario completa su desarrollo, protegiéndole de enfermedades como catarros, bronquiolitis, neumonía, diarreas, otitis, infecciones de orina, etcétera; además de enfermedades futuras como asma, alergia, obesidad, o diabetes, y favoreciendo el intelecto.
								</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab2">
							<div class="testimonial-image">
								<img src="assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg">
							</div>
							<div class="testimonial-text">
								<p>
									Cómo mejorar la falta de atención en los niños<br>
									Ayudar a los niños y niñas a dirigir su atención de forma consciente hacía aquello que quieren aprender, evitando otros estímulos distractores es una tarea necesaria para potenciar sus aprendizajes. De esta manera conseguiremos que se concentren en la tarea o contenido concreto que tienen que aprender y, como consecuencia mejoraran su rendimiento. Entrenarles para que sean capaces de dirigir su atención se convierte en una necesidad educativa que no podemos eludir, en una necesidad que supone abrirles las puertas al aprendizaje, a través del control de la focalización de su mente. <br>
									<a class="big-link-1" href="http://www.webconsultas.com/bebes-y-ninos/educacion-infantil/como-afecta-la-falta-de-atencion-al-aprendizaje">Leer mas</a>
								</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab3">
							<div class="testimonial-image">
								<img src="assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg">
							</div>
							<div class="testimonial-text">
								<p>	Enseña a tus hijos a usar Internet<br>
									Muchos padres se sienten frustrados porque no conocen el sistema de las Tecnologías de la Información y la Comunicación (TICs) tan bien como los jóvenes, y se encuentran inmersos en un mundo extraño para ellos. Sin embargo, es necesario que desempeñen un papel importante en la educación digital de sus hijos y les enseñen desde pequeños a hacer un uso responsable de la Red, para evitar situaciones peligrosas, por ejemplo en casos de ciberbullying, grooming o sextorsión.<br>
									<a class="big-link-1" href="http://www.webconsultas.com/bebes-y-ninos/juegos-y-ocio-infantil/ensena-a-tus-hijos-a-usar-correctamente-internet">Leer mas</a>
								</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab4">
							<div class="testimonial-image">
								<img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
							</div>
							<div class="testimonial-text">
								<p>
									Leches de crecimiento<br>
									La leche es un alimento básico para los bebés a partir del nacimiento, bien a través de la leche materna, que es el sistema recomendado por la OMS y el resto de organizaciones internacionales, bien a través de fórmulas artificiales. Al año de vida, llegamos al dilema sobre qué tipo de leche dar a nuestro hijo, en el caso de que no prosigamos con la lactancia materna. Y nos encontramos con dos opciones: leche de vaca o leche de crecimiento.<br>
									<a class="big-link-1" href="http://www.webconsultas.com/bebes-y-ninos/nutricion-infantil/leches-de-crecimiento">Leer mas</a>
								</p>
							</div>
						</div>
					</div>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
						</li>
						<li role="presentation">
							<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
						</li>
						<li role="presentation">
							<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
						</li>
						<li role="presentation">
							<a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
