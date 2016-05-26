@extends('layouts.master')
@section('content')

<!-- Top content -->
<div class="top-content">

	<div class="inner-bg">
		<div class="container">

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-box">

					<form role="form" method="post">
						{!! csrf_field() !!}
						<fieldset>
							<div class="form-top">
								<div class="form-top-left">
									<h3>¡Regístrate!</h3>
									<p>Es gratis.</p>
								</div>
								<div class="form-top-right">
									<i class="fa fa-user"></i>
								</div>
							</div>
							<div class="form-bottom">
								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									<label class="sr-only" for="nombre">Nombre</label>
									<input type="text" name="name" placeholder="Nombre" class="form-first-name form-control" id="nombre" value="{{old('name')}}">
									@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
									@endif
								</div>
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label  class="sr-only" for="email">Email</label>
									<input type="email" name="email" placeholder="Email" class="form-password form-control" id="email" required value="{{old('email')}}">
									@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
									@endif
								</div>
								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<label class="sr-only" for="password">Contraseña</label>
									<input type="password" name="password" placeholder="Contraseña" required class="form-password form-control">
									@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
									@endif
								</div>
								<div class="form-group{{ $errors->has('repassword') ? ' has-error' : '' }}">
									<label for="repassword" class="sr-only">Confirma tu contraseña</label>
									<input type="password" name="repassword" placeholder="Confirma tu contraseña" required class="form-password form-control">
									@if ($errors->has('repassword'))
									<span class="help-block">
										<strong>{{ $errors->first('repassword') }}</strong>
									</span>
									@endif
								</div>
								<button type="submit" class="btn">Siguiente</button>
							</div>
						</fieldset>



					</form>

				</div>
			</div>
		</div>
	</div>

</div>
@endsection
