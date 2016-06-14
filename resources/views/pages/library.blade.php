@extends('layouts.master')
@section('content')
<div class="page-title-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 wow fadeIn">
				<i class="fa fa-pencil"></i>
				<h1>Repositorio /</h1>
				<p>Encuentra libros, folletos, y demas contenido para descargar.</p>
			</div>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-sm-12 wow fadeIn">

			<div class="content">
				@foreach($files as $file)
				<figure class="thumb">
					<div class="cover">
						<img src="{{$file['image_uri']}}"/>
					</div>
					<h2>{{$file['name']}}</h2>
					<a class="btn btn-default" href="assets/img/logo.png" download="logo.png">Descargar</a>
				</figure>
				@endforeach
			</div>
			<div class="content"></div>

		</div>
	</div>
</div>
</div>

<div class="pagination"></div>

<div class="console"></div>

@endsection
