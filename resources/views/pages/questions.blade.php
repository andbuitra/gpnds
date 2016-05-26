@extends('layouts.master')
@section('content')
<div class="page-title-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 wow fadeIn">
				<i class="fa fa-pencil"></i>
				<h1>Preguntas /</h1>
				<p>Haz una pregunta a nuestros especialistas</p>
			</div>
		</div>
	</div>
</div>
<div class="posts-1-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 posts-1-title wow fadeIn">
				<h2>Especialistas</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 posts-1-box posts-1-box-best wow fadeInDown">
				<div id="w">

					<div id="teamcontent" class="clearfix">
						<img src="" class="bigimg" width="225" height="260">
						<div id="teamdetails">
							<h2 id="bigname">Name</h2>
							<h3 id="bigjob">Title</h3>
							<p id="bigdesc">A brief description.</p>
							<div class="posts-1-box-sign-up">
								<a class="big-link-3" href="/chatp">Preguntar</a>
							</div>
						</div>
					</div>
					<ul class="team clearfix">
						<li>
							<img src="assets/img/friends/fr-01.jpg" alt="Jairo Enrique Ascencio Gutierrez" width="130" height="150" class="profilepic">
							<span class="hcontent job">Doctor, Especialista en Pediatria</span>
							<span class="hcontent desc">
								Titulos: nssnqpsq <br>
								Direccion: Avenida 12 E # 4-38 Cons. 101 - Cúcuta <br>
								Telefono: 2216241
							</span>
						</li>
						<li>
							<img src="assets/img/friends/fr-03.jpg" alt="Mauricio Torres" width="130" height="150" class="profilepic">
							<span class="hcontent job">Psicologo, Especialista en Puericultura</span>
							<span class="hcontent desc">
								Titulos: nssnqpsq <br>
								Direccion: Avenida 12 E # 4-38 Cons. 101 - Cúcuta <br>
								Telefono: 2216241
							</span>
						</li>
						<li>
							<img src="assets/img/friends/fr-04.jpg" alt="Teresa Tarazona" width="130" height="150" class="profilepic">
							<span class="hcontent job">Jefe de enfermeria, Especialista en pediatria</span>
							<p class="hcontent desc">
								Titulos: nssnqpsq <br>
								Direccion: Avenida 12 E # 4-38 Cons. 101 - Cúcuta <br>
								Telefono: 2216241
							</p>
						</li>
						<li>
							<img src="assets/img/friends/fr-08.jpg" alt="Luna Maldonado" width="130" height="150" class="profilepic">
							<span class="hcontent job">Enfermera, Especialista en pediatria.</span>
							<span class="hcontent desc">
								Titulos: nssnqpsq <br>
								Direccion: Avenida 12 E # 4-38 Cons. 101 - Cúcuta <br>
								Telefono: 2216241
							</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
