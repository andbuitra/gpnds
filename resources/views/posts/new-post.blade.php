<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/bootstrap/js/bootstrap.js')}}"></script>
	<link href="{{asset('assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('assets/summernote/summernote.css')}}" rel="stylesheet">
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</head>
<body>
	<header>
		@include('includes.header')
	</header>

		<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-pencil"></i>
                        <h1>Creando una nueva entrada /</h1>
                        <p>Por favor comparte tu información con nosotros!!</p>
                    </div>
                </div>
            </div>
        </div>
		<!-- Posts populares -->

			<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 form-box">
								<br>
								<form role="form" class="login-form" action="" method="post">
									{!! csrf_field() !!}
									<div class="form-group">
										<label class="sr-only" for="form-title">Titulo</label>
										<input type="text" name="title" placeholder="Titulo" class="form-username form-control" id="form-title">
									</div>
									<textarea name="body" id="summernote"></textarea>
									<div class="form-group">
										<label class="sr-only" for="form-tags">Titulo</label>
										<input type="text" name="tags" placeholder="Tags" class="form-username form-control" id="form-tags">
									</div>
									<input type="hidden" name="user_id" value="{{Auth::user()->user_id}}">
									<button type="submit" class="btn btn-submit">Guardar</button>
								</form>
						</div>
					</div>
				</div>




				<script>
					$(document).ready(function(){
						$('#summernote').summernote({
							height: 300,
							minHeight: null,
							maxHeight: null,
							width: 600,
							focus: true
						});
					});
				</script>
		<footer>
		@include('includes.footer')
	</footer>
	<script src="{{asset('assets/summernote/summernote.js')}}"></script>
</body>
</html>
