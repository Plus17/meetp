<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        {!! Html::style('assets/css/index.css') !!}
        {!! Html::style('assets/css/ed-grid.css') !!}

        <title>@yield('title')</title>

    </head>
    <body class="desarrollo">
        <header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">MeetPlus</a>
				</div>
				<!-- Inicia Menu -->
				<div class="collapse navbar-collapse" id="navegacion-fm">
					<ul class="nav navbar-nav">
						<li class="active"><a href="{{url('/')}}">Inicio</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Categorias <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
                @foreach ($categories as $category)
                  <li><a href="#">{{ $category->name }}</a></li>
                @endforeach
							</ul>
						</li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contacto</a></li>



                            <li><a href="{{ url('auth/login') }}">Login</a></li>
                            <li><a href="#">Registro</a></li>


					</ul>

					<form action="" class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="buscar">
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</form>


				</div>
			</div>
		</nav>
	</header>

    <section class="jumbotron">
		<div class="container">
			<h1>MeetPlus</h1>
			<p>Eventos para Geeks - Encuentra a quien va al mismo evento que tu</p>
		</div>
	</section>

    <section class="main container">
        @yield('content')
    </section>

    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>
</html>
