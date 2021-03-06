@extends('layouts.master')
@section('content')
<div class="top-content">
	<div class="inner-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-box">
					<div class="form-top">
						<div class="form-top-left">
							<h3>Inicia sesión en nuestro sitio</h3>
							<p>Ingresa tu correo electrónico y contraseña para iniciar sesión.</p>
						</div>
						<div class="form-top-right">
							<i class="fa fa-lock"></i>
						</div>
					</div>
					<div class="form-bottom">
						<div class="form-top">
							<div class="form-top-left">
								<form role="form" method="post" class="login-form">
									{!! csrf_field() !!}
									<div class="form-group">
										@if ($errors->has('credentials'))
											<span class="help-block" style="color:red">
												<strong>{{ $errors->first('credentials') }}</strong>
											</span>
										@endif
										<label class="sr-only" for="form-username">Email</label>
										<input type="text" name="email" placeholder="Email" class="form-username form-control" id="form-username">
									</div>
									<div class="form-group">
										<label class="sr-only" for="form-password">Contraseña</label>
										<input type="password" name="password" placeholder="Contraseña" class="form-password form-control" id="form-password">
									</div>
									<button type="submit" class="btn">Entrar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 social-login">
					<h3>...o puedes iniciar sesion con:</h3>
					<div class="social-login-buttons">
						<a class="btn btn-link-2" href="#">
							<i class="fa fa-facebook"></i> Facebook
						</a>
						<a class="btn btn-link-2" href="#">
							<i class="fa fa-twitter"></i> Twitter
						</a>
						<a class="btn btn-link-2" href="#">
							<i class="fa fa-google-plus"></i> Google Plus
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
