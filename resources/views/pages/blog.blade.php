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
                    <div class="col-sm-4 posts-1-box posts-1-box-best wow fadeInDown">
                    	<div class="posts-1-box-inner">

		                    <h3>Ultimos cuidados con la alimentacion de ni&ntilde;os</h3>
		                    <h4><i class="glyphicon glyphicon-time"></i>15 OCT, 2014 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a></h4>
		                    <div class="posts-1-box-features">
		                    	<ul>
									<img src="assets/img/articulos/1.jpg">
		                    		<li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio....</li>

		                    	</ul>
		                    </div>
		                    <div class="posts-1-box-sign-up">
		                    	<a class="big-link-3" href="/blog/post">Leer mas</a>
		                    </div>
		                </div>
                    </div>

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
		                    	<img src="assets/img/articulos/3.jpg">
								<li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio....</li>
								</ul>
		                    </div>
		                    <div class="posts-1-box-sign-up">
		                    	<a class="big-link-3" href="#">Leer mas</a>
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
		<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
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
