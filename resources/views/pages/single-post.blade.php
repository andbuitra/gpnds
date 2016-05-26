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

<div class="section">
	<div class="container">
		<div class="row">
			<!-- Blog Post -->
			<div class="col-sm-8">
				<div class="blog-post blog-single-post">
					<div class="single-post-title">
						<h2>{{$post->title}}</h2>
					</div>
					<div class="single-post-info">
						<i class="glyphicon glyphicon-time"></i>15 OCT, 2014 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
					</div>
					<div class="single-post-content" align="justify">
						<!-- <img src="" alt="Post Title"> -->
						{!!$post->body!!}
					</div>

					<div class="work-container">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 work-title wow fadeIn">
									<h2>Dejanos un comentario.</h2>
								</div>
							</div>
						</div>
					</div>

					<div id="disqus_thread"></div>
					<script>
					/**
					* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
					* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
					*/
					/*
					var disqus_config = function () {
					this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
					this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				*/
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');

				s.src = '//gpndschat.disqus.com/embed.js';

				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>


			<!-- End Blog Post -->
			<!-- Sidebar -->
			<div class="col-sm-4 blog-sidebar">
				<div class="service wow fadeInUp">
					<h4>Search our Blog</h4>
					<form>
						<div class="input-group">
							<input class="form-control input-md" id="appendedInputButtons" type="text">
							<span class="input-group-btn">
								<button class="btn btn-md" type="button">Search</button>
							</span>
						</div>
					</form>
				</div>
			</div>

			<div class="col-sm-4 blog-sidebar">
				<div class="service wow fadeInUp">
					<h4>Posts Recientes</h4>
					<ul class="recent-posts">
						<li><a href="#">Lorem ipsum dolor sit amet</a></li>
						<li><a href="#">Sed sit amet metus sit</a></li>
						<li><a href="#">Nunc et diam volutpat tellus ultrices</a></li>
						<li><a href="#">Quisque sollicitudin cursus felis</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4 blog-sidebar">
				<div class="service wow fadeInUp">
					<h4>Categorias</h4>
					<ul class="blog-categories">
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Sed sit amet metus</a></li>
						<li><a href="#">Nunc et diam </a></li>
						<li><a href="#">Quisque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4 blog-sidebar">
				<div class="service wow fadeInUp">
					<h4>Archivos</h4>
					<ul>
						<li><a href="#">January 2013</a></li>
						<li><a href="#">February 2013</a></li>
						<li><a href="#">March 2013</a></li>
						<li><a href="#">April 2013</a></li>
						<li><a href="#">May 2013</a></li>
					</ul>
				</div>
			</div>
			<!-- End Sidebar -->
		</div>
	</div>


</div>

@endsection
