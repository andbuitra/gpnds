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
                        <h1>Foro /</h1>
                        <p>Encuentra respuestas a temas comunes, y participa comentando.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonials-container">
	        <div class="container">
	            <div class="row">
	            <div class="alineacionPosts">
					<div = class="col-sm-9">

					<div id="main">
					  <div class="header">
					    <h1 class="page-title">{{$question->title}}</h1>

					  </div>
					  <div id="main-nano-wrapper" class="nano">
					    <div class="nano-content">
					      <ul class="message-container">
					        <li class="sent">
					          <div class="details">
					            <div class="left">Hecha por
					              <div class="arrow"></div>{{$question->user->name}}
					            </div>
					            <div class="right">{{$question->created_at}}</div>
					          </div>
					          <div class="message">
					            <p>{{$question->body}}</p>
					          </div>
					          <div class="tool-box"><a href="#" class="circle-icon small glyphicon glyphicon-share-alt"></a><a href="#" class="circle-icon small red-hover glyphicon glyphicon-remove"></a><a href="#" class="circle-icon small red-hover glyphicon glyphicon-flag"></a></div>
					        </li>
						<div class="header">
					    <h1 class="page-title">Respuestas</h1>
					  	</div>

									@foreach($answers as $answer)
					        <li class="received">
					          <div class="details">
					            <div class="left">{{$answer->user->name}}
					              <div class="arrow orange"></div>
					            </div>
					            <div class="right">{{$answer->created_at}}</div>
					          </div>
					          <div class="message">
					            <p>{{$answer->answer}}</p>

					          </div>
					          <div class="tool-box"><a href="#" class="circle-icon small glyphicon glyphicon-share-alt"></a><a href="#" class="circle-icon small red-hover glyphicon glyphicon-remove"></a><a href="#" class="circle-icon small red-hover glyphicon glyphicon-flag"></a></div>
					        </li>
									@endforeach
					      </ul>
					      <div class="comments">
							<div class="comment-wrap">
									<div class="photo">
											<div class="avatar" style="background-image: url('{{Auth::user()->user_image_uri}}')"></div>
									</div>
									<form action="/nuevo/respuesta" method="post">
										{{ csrf_field() }}
									<div class="comment-block">

													<textarea class="comment-block" name="answer" id="" cols="30" rows="3" placeholder="Deja tu respuesta..."></textarea>
													{{request()->session()->flash('forum_question_id', $question->forum_question_id)}}

									</div>
									<div class="thisAline">
										<div class="preguntas">
											<input type="submit" value="Preguntar">

										</div>

									</div>

							</div>
						</form>

						</div>

					    </div>
					  </div>

					</div>

	            </div>
	            </div>
	        </div>
        </div>


	<!-- FIN CUERPO DE LA PÁGINA -->

	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>
