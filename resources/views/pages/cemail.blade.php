<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header>
		@include('includes.header')
	</header>

		<section class="hero">
  			<h1><span>Bienvenido</span>Gracias por registrarte</h1>
  			<h2>{{$name}}, hemos enviando un link de confirmacion a tu correo {{$email}} con el que podrás activar tu cuenta, y
  			disfrutar de todos los benificios al ser un miembro de nuestra comunidad.</h2>
			</section>

	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>
