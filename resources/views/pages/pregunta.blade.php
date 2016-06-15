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
				<h1>Realiza tu pregunta /</h1>
				<p>Si tienes alguna duda, puedes encontrar la solucion aqui.</p>
			</div>
		</div>
	</div>
</div>
<!-- Posts populares -->
<div class="posts-1-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 posts-1-title wow fadeIn">
				<h2>Haz tu pregunta</h2>
			</div>
		</div>
		<div class="row">

			<!-- POST -->
			<div class="col-sm-12 posts-1-box posts-1-box-best wow fadeInDown">
				<div class="posts-1-box-inner">
					<div class="preguntas">
					<form action="">

					  <input type="text" placeholder="Titulo de la pregunta..." name="title" required>

					  <textarea placeholder="Explica tu pregunta..." name="pregunta" required></textarea>		  

					  

					  <input type="submit" value="Preguntar">

					</form>
					</div>
			</div>

			<!-- FINAL -->


					
		</div>
	</div>
</div>

	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>
