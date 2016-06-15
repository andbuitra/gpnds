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
				<h2>Lista de posts</h2>
			</div>
		</div>
		<div class="row">

			<!-- POST -->
			<div class="alineacionPosts">
			<div class="col-sm-8 posts-1-box posts-1-box-best wow fadeInDown">
				<div class="posts-1-box-inner">

					<a href="/blog/post"><h3>Ultimos cuidados con la alimentacion de ni&ntilde;os</h3></a>
					<h4><i class="glyphicon glyphicon-time"></i>15 OCT, 2014 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a></h4>
					<div class="posts-1-box-features">
						<ul>
							<img src="assets/img/articulos/1.jpg">
							<li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio....</li>

						</ul>
					</div>
					
				</div>
			</div>
			
			<div class="col-sm-8 posts-1-box posts-1-box-best wow fadeInDown">
				<div class="posts-1-box-inner">

					<h3>Ultimos cuidados con la alimentacion de ni&ntilde;os</h3>
					<h4><i class="glyphicon glyphicon-time"></i>15 OCT, 2014 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a></h4>
					<div class="posts-1-box-features">
						<ul>
							<img src="assets/img/articulos/3.jpg">
							<li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio....</li>

						</ul>
					</div>
					
				</div>
			</div>

				<ul class="paginationB modal-1">
			  <li><a href="#" class="prev">&laquo</a></li>
			  <li><a href="#" class="active">1</a></li>
			  <li> <a href="#">2</a></li>
			  <li> <a href="#">3</a></li>
			  <li> <a href="#">4</a></li>
			  <li> <a href="#">5</a></li>
			  <li> <a href="#">6</a></li>			 			  
			  <li><a href="#" class="next">&raquo;</a></li>
			</ul><br>
			</div>

			<!-- FINAL DEL POST -->

		
			

		</div>
	</div>
</div>

	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>
