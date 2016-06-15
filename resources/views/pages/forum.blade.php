@extends('layouts.master')
@section('content')
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
				<div = class="col-sm-12">
					<main id="main">
						<div class="overlay"></div>
						<header class="header">

							<h1>Foro de Puericultura</h1>
							<!-- No implementado
							<div class="search-box">
							<input placeholder="Search..."><span class="icon glyphicon glyphicon-search"></span>

						</div>
					-->
					<div class="moreAline">
						<div class="posts-1-box-sign-up">
							<a class="big-link-3" href="/nuevo/pregunta">Crea tu propia pregunta</a>
						</div>
					</div>
				</header>

				<div id="main-nano-wrapper" class="nano">
					<div class="nano-content">


						<ul class="message-list">
							@foreach($questions as $question)
							<li>
								<div class="col col-1"><span class="dot"></span>
									<p class="title">{{$question->title}}</p>
								</div>
								<div class="col col-2">
									<div class="subject">{{$question->user->name}}</div>
									<div class="date">{{$question->created_at}}</div>
								</div>
							</li>
							@endforeach
						</ul><a href="#" class="load-more-link">Show more questions</a>
					</div>
				</div>
			</main>
			<div id="message">
				<div class="header">
					<h1 class="page-title"><a class="icon circle-icon glyphicon glyphicon-chevron-left trigger-message-close"></a>{{$question->title}}</h1>
				</div>
				<div id="message-nano-wrapper" class="nano">
					<div class="nano-content">
						<ul class="message-container">
							<li class="sent">
								<div class="details">
									<div class="left">Hecha por
										<div class="arrow"></div>{{$question->title}}
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
								@if($answer->answer_id == $question->question_id)
								<li class="received">
									<div class="details">
										<div class="left">{{$answer->user->name}}

										</div>
										<div class="right">{{$answer->created_at}}</div>
									</div>
									<div class="message">
										<p>{{$answer->answer}}</p>
									</div>
									<div class="tool-box"><a href="#" class="circle-icon small glyphicon glyphicon-share-alt"></a><a href="#" class="circle-icon small red-hover glyphicon glyphicon-remove"></a><a href="#" class="circle-icon small red-hover glyphicon glyphicon-flag"></a></div>
								</li>
								@endif
							@endforeach
						</ul>


						<div class="comments">
							<div class="comment-wrap">
								<div class="photo">
									<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>
								</div>
								<div class="comment-block">
									<form action="">
										<textarea name="" id="" cols="30" rows="3" placeholder="Deja tu respuesta..."></textarea>
									</form>
								</div>
							</div>
							<div class="posts-1-box-sign-up">
								<a class="big-link-3" href="/blog/post">Comentar</a>
							</div>

						</div>

					</div>
				</div>

			</div>

		</div>
	</div>
</div>
@endsection
