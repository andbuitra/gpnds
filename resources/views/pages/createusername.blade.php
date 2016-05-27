@extends('layouts.master')
@section('content')
		<section class="hero">
  			<h1><span>Ya estás casi listo.</span>Es hora de seleccionar tu nombre de usuario</h1>
				<div class="form-group">
					<form class="form-group"  method="post" action="assign-username">
						{!! csrf_field() !!}
						@if($errors->has('username'))
							<span class="help-block" style="color:red">
								<strong>{{ $errors->first('username') }}</strong>
							</span>
						@endif						
						<input type="text" name="username" placeholder="Escribe tu nombre de usuario">
						<button type="submit" class="btn" name="send">Registrar</button>
					</form>
				</div>
			</section>
@endsection
