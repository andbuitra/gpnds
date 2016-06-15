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
			<a class="navbar-brand" href="/">Grupo de Puericultura - Norte de Santander</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="top-navbar-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="{{ Request::is('/') ? 'active' : ''}}">
					<a href="/"><i class="fa fa-home"></i><br>Inicio</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
						<i class="fa fa-tasks"></i><br>Info</a>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li class="{{ Request::is('/info/sobre-nosotros') ? 'active' : ''}}">
							<a href="/info/sobre-nosotros">Sobre nosotros</a>
						</li>
						<li class="{{ Request::is('/info/puericultura') ? 'active' : ''}}">
							<a href="/info/puericultura">¿Que es puericultura?</a>
						</li>
						<li class="{{ Request::is('/info/faq') ? 'active' : ''}}">
							<a href="/info/faq">Preguntas frecuentes</a>
						</li>
					</ul>
				</li>
				<li class="{{ Request::is('eventos') ? 'active' : ''}}">
					<a href="/eventos"><i class="fa fa-list-alt"></i><br>Eventos</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
						<i class="fa fa-tasks"></i><br>Herramientas</a>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/repositorio">Biblioteca publica</a></li>
						<li><a href="/questions">Consulta con especialistas</a></li>
						<li><a href="#">Foro publico</a></li>
						<li class="dropdown-submenu">
							<a tabindex="-1" href="#">Links de interes</a>
							<ul class="dropdown-menu">
								<li><a href="#">Sociedad de pediatria de Colombia</a></li>
								<li><a href="#">Pediatria y puericultua en Colombia</a></li>
							</ul>
						</li>
					</ul>

				</li>
				<li class="{{ Request::is('contacto') ? 'active' : ''}}">
					<a href="/contacto"><i class="fa fa-envelope"></i><br>Contacto</a>
				</li>
				<li class="{{ Request::is('blog') || Request::is('blog/') ? 'active' : ''}}">
					<a href="/blog"><i class="fa fa-bold"></i><br>Blog</a>
				</li>
				<li class="{{ Request::is('galeria') || Request::is('galeria/') ? 'active' : ''}}">
					<a href="/galeria"><i class="fa fa-bold"></i><br>Galeria</a>
				</li>

				@if (Auth::check())
				<li class="{{ Request::is('profile/'.Auth::user()->profileID.'/edit') || Request::is('profile/'.Auth::user()->profileID)  ? 'active' : ''}} dropdown">
					<a href="/profile" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
						<i class="fa fa-user"></i><br>{{explode(' ',trim(Auth::user()->name ))[0]}} <span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/profile/edit">Configuración</a></li>
						<li><a href="/logout">Cerrar sesión</a></li>
					</ul>
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
