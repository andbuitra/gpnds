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
								<h2>Ultimos cuidados con la alimentacion de ni&ntilde;os</h2>
							</div>
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>15 OCT, 2014 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
							</div>
							<div class="single-post-content" align="justify">
								<img src="../assets/img/articulos/1.jpg" alt="Post Title">
								<h3>Lorem ipsum dolor sit amet</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio. Duis elementum ligula eu ipsum condimentum accumsan.
								</p>
								<p>
									Vivamus euismod elit ac libero facilisis tristique. Duis mollis non ligula vel tincidunt. Nulla consectetur libero id nunc ornare, vel vulputate tellus mollis. Sed quis nulla magna. Integer rhoncus sem quis ultrices lobortis. Maecenas tempus nulla quis dolor vulputate egestas. Phasellus cursus tortor quis massa faucibus fermentum vel sit amet tortor. Phasellus vehicula lorem et tortor luctus, a dignissim lacus tempor. Aliquam volutpat molestie metus sit amet aliquam. Duis vestibulum quam tortor, sed ultrices orci sagittis nec.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio. Duis elementum ligula eu ipsum condimentum accumsan.
								</p>
								<p>
									Vivamus euismod elit ac libero facilisis tristique. Duis mollis non ligula vel tincidunt. Nulla consectetur libero id nunc ornare, vel vulputate tellus mollis. Sed quis nulla magna. Integer rhoncus sem quis ultrices lobortis. Maecenas tempus nulla quis dolor vulputate egestas. Phasellus cursus tortor quis massa faucibus fermentum vel sit amet tortor. Phasellus vehicula lorem et tortor luctus, a dignissim lacus tempor. Aliquam volutpat molestie metus sit amet aliquam. Duis vestibulum quam tortor, sed ultrices orci sagittis nec.
								</p>
								<h3>Sed sit amet metus sit</h3>
								<p>
									Proin fermentum, purus id eleifend molestie, nisl arcu rutrum tellus, a luctus erat tortor ut augue. Vivamus feugiat nisi sit amet dignissim fermentum. Duis elementum mattis lacinia. Sed sit amet metus sit amet leo semper feugiat. Nulla vel orci nec neque interdum facilisis egestas vitae lorem. Phasellus elit ante, posuere at augue quis, porta vestibulum magna. Nullam non mattis odio. Donec eget velit leo. Nunc et diam volutpat tellus ultrices fringilla eu a neque. Integer lectus nunc, vestibulum a turpis vitae, malesuada lacinia nibh. In sit amet leo ut turpis convallis bibendum. Nullam nec purus sapien. Quisque sollicitudin cursus felis sit amet aliquam.
								</p>

							</div>
							<div class= "bod">
							<div class="containerc">
							    <div class="comment-box">
							      <div class="comment-form">


							        <div class="headerb">Agrega tu comentario</div>
							        <form action="#" onsubmit="event.preventDefault(); postComment()">
							          <div class="commentWork">
							            <input type="text" id="name" placeholder="Usuario"/>
							          </div>
							          <div class="commentWork">
							            <textarea id="comment" rows="3" cols="30" placeholder="Comentario"></textarea>
							          </div>
							          <button type="submit">COMENTAR</button>
							        </form>
							      </div>
							      <div>
							        <h4 class="header">Comentarios</h4>
							        <div id="comments"></div>
							      </div>

							    </div>
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
		<footer>
		@include('includes.footer')
		</footer>

</body>
</html>
