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
				@foreach($filenames as $file)
				<figure class="thumb">
					<div class="cover">
						<img src="{{$file->image_uri}}"/>
					</div>
					<h2>{{$file->fileName}}</h2>
					<a class="btn btn-default" href="descargar/{{$file->fileName.'.'.$file->ext}}" download>Descargar</a>
				</figure>
				@endforeach
			</div>
			<div class="content"></div>

		</div>
	</div>
</div>
</div>

{!! $files->render() !!}

@endsection
