@extends('layouts.master')
@section('content')
<div class="page-title-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 wow fadeIn">
				<i class="fa fa-pencil"></i>
				<h1>Nuestro Blog /</h1>
				<p>Encuentra en nuestro blog lo ultimo sobre puericultura.</p>
			</div>
		</div>
	</div>
</div>
<!-- Posts populares -->
<div class="posts-1-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 posts-1-title wow fadeIn">
				<h2>Posts populares</h2>
			</div>
		</div>
		<div class="row">

			<!-- POST -->
			@foreach($mostLikedPosts as $post)

				<div class="col-sm-4 posts-1-box posts-1-box-best wow fadeInDown">
					<div class="posts-1-box-inner">

						<h3>{{$post->title}}</h3>
						<h4><i class="glyphicon glyphicon-time"></i>{{$post->created_at}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a></h4>
						<div class="posts-1-box-features">
							<ul>
								<img src="{{$post->cover_image}}">
								<li>{{$post->description}}</li>
							</ul>
						</div>
						<div class="posts-1-box-sign-up">
							<a class="big-link-3" href="/blog/{{$post->slug}}">Leer más</a>
						</div>
					</div>
				</div>

			@endforeach

			<!-- FINAL DEL POST -->


			<!-- Pricing 2 -->
			<div class="posts-2-container">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 posts-1-title wow fadeIn">
							<h2>Posts recientes</h2>
						</div>
					</div>
					<div class="row">

						@foreach($recentPosts as $recentPost)
						<div class="col-sm-3 posts-1-box wow fadeInUp">
							<div class="posts-1-box-inner">

								<h3>{{$recentPost['title']}}</h3>
								<h4><i class="glyphicon glyphicon-time"></i>{{$recentPost['created_at']}}</h4>
								<div class="posts-1-box-features">
									<ul>
										<img src="{{$recentPost['cover_image']}}">
										<li>{{$recentPost['description']}}</li>
									</ul>
								</div>
								<div class="posts-1-box-sign-up">
									<a class="big-link-3" href="/blog/{{$recentPost['slug']}}">Leer mas</a>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
