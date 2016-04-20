<!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Grupo de Puericultura - Norte de Santander</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="{{ Request::is('/') ? 'active' : ''}}">
							<a href="/"><i class="fa fa-home"></i><br>Inicio</a>
						</li>
						<li class="{{ Request::is('sobre-nosotros') ? 'active' : ''}}">
							<a href="/sobre-nosotros"><i class="fa fa-globe"></i><br>Sobre nosotros</a>
						</li>
						<li class="{{ Request::is('eventos') ? 'active' : ''}}">
							<a href="/eventos"><i class="fa fa-list-alt"></i><br>Eventos</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-tasks"></i><br>Links de interes</a>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Sociedad de pediatria de Colombia</a></li>
								<li><a href="#">Pediatria y puericultua en Colombia</a></li>
							</ul>

						</li>
						<li class="{{ Request::is('contacto') ? 'active' : ''}}">
							<a href="/contacto"><i class="fa fa-envelope"></i><br>Contacto</a>
						</li>
						<li class="{{ Request::is('blog') || Request::is('blog/') ? 'active' : ''}}">
							<a href="/blog"><i class="fa fa-bold"></i><br>Blog</a>
						</li>

						@if (Auth::check())
						<li class="{{ Request::is('me') ? 'active' : ''}}">
							<a href="/me"><i class="fa fa-user"></i><br>{{ Auth::user()->name }}</a>
						</li>

						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-user"></i><br>Login <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/iniciar-sesion">Iniciar sesion</a></li>
								<li><a href="/registro">Registrate</a></li>
							</ul>

						</li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
