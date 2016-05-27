@extends('layouts.master')
@section('content')
		<section class="hero">
  			<h1><span>Bienvenido.</span>Ya eres parte de nuestra comunidad</h1>
				<h3>En cuestión de segundos serás redirigido para que inicies sesión.</h3>
			</section>
			<script type="text/javascript">
			setTimeout(function () {
				window.location.href = "/iniciar-sesion"; //will redirect to your blog page (an ex: blog.html)
			}, 5000); //will call the function after 5 secs.
			</script>
@endsection
