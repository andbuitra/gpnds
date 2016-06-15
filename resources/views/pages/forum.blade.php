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
								<a href="/pregunta/{{$question->slug}}">
							<li>
								<div class="col col-1"><span class="dot"></span>
									<p class="title">{{$question->title}}</p>
								</div>
								<div class="col col-2">
									<div class="subject">{{$question->user->name}}</div>
									<div class="date">{{$question->created_at}}</div>
								</div>
							</li>
							</a>
							@endforeach
						</ul><a href="#" class="load-more-link">Show more questions</a>
					</div>
				</div>
			</main>
			
		</div>
	</div>
</div>
@endsection
