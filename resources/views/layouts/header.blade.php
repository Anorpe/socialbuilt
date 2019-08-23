<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Social built</title>
    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
    <!--Google Webfont-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
			@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <!--</li>-->
                            <!--@if (Route::has('register'))-->
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif-->
            @else
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
			<li class="dropdown"><a href="/home">Inicio</a></li>
			@if(Auth::user()->admin == True)
                <li class="dropdown"><a href="/admin/nuevo">Crear Perfil</a></li>
				<li class="dropdown"><a href="/admin/consultar">Consultar Perfil</a></li>
                <li class="dropdown"><a href="/admin/nuevanoticia">Crear Noticia</a></li>
                <li class="dropdown"><a href="/admin/nuevanotificacion">Crear Notificación</a></li>
                <li class="dropdown"><a href="/admin/shownotificacion">Consultar Notificaciones</a></li>
            
			@else
                <li class="dropdown"><a href="/user/editar">Modificar Clave</a></li>
                <li class="dropdown"><a href="/user/nuevanotificacion">Crear Notificación</a></li>
                <li class="dropdown"><a href="/user/shownotificacion">Consultar Notificaciones</a></li>
				
            @endif
            <li class="dropdown">
                    <a id="navbarDropdown" class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->email }} <span><img src="images/down-arrow.png" alt="" /></span></a>
                    <ul class="dropdown-menu login">
                      <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                    </ul>
                  </li>
			@endguest	
            </ul>
            </div>
        </div>
      </nav>
    </header>


    