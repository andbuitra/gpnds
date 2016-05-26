@extends('layouts.master')
@section('content')
<div class="page-title-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 wow fadeIn">
				<i class="fa fa-pencil"></i>
				<h1>Publicar /</h1>
				<p>Edita y publica posts</p>
			</div>
		</div>
	</div>
</div>

<div class="container alinee">

	<form role="form">
		<div class="form-bottom">

			<textarea style="width: 1100px; height: 250px;"></textarea>
			<br>
			<button align="center" class="btn btn-primary">Postear</button>
		</div>
	</form>
</div>
@endsection
