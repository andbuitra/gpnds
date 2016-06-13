<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
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
								<i class="glyphicon glyphicon-time"></i>{{$post->created_at}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
							</div>
							<div class="single-post-content" align="justify">
								{{$post->body}}
							</div>
							<div class="bcomment">
							<div class="comments">
								<div class="comment-wrap">
										<div class="photo">
												<div class="avatar" style="background-image: url('{{Auth::user()->user_image_uri}}')"></div>
										</div>
										<div class="comment-block">
												<form action="/nuevo/comentario" method="post">
													{!! csrf_field() !!}
														<textarea name="body" id="" cols="30" rows="3" placeholder="Add comment..."></textarea>
														<input type="hidden" name="post_id" value="{{$post->post_id}}">
														<button type="submit">COMMENT</button>
												</form>
										</div>
								</div>
								@foreach($comments as $comment)
								<div class="comment-wrap">
										<div class="photo">
												<div class="avatar" style="background-image: url('$comment->user->user_image_uri')"></div>
										</div>
										<div class="comment-block">
												<p class="comment-text">{{$comment->body}}</p>
												<div class="bottom-comment">
														<div class="comment-date">{{$comment->created_at}}</div>
												</div>
										</div>
								</div>
								@endforeach
						</div>
						</div>

						</div>




					</div>
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



        <!-- Javascript -->
        <script src="/assets/js/comment.js"></script>
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="/assets/js/jquery.backstretch.min.js"></script>
        <script src="/assets/js/wow.min.js"></script>
        <script src="/assets/js/retina-1.1.0.min.js"></script>
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>
		<footer>
		@include('includes.footer')
		</footer>

</body>
</html>
