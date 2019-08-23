<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
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
            <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->email }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
			@endguest	
            </ul>
            </div>
        </div>
      </nav>
    </header>
    <div id="page-contents">
    	<div class="container">
    		<div class="row">
          <!-- Perfil Usuario
          ================================================= -->
    		<div class="col-md-3 static">
            <div class="profile-card">
                <img src="images/users/user-1.jpg" alt="user" class="profile-photo" />
                <h5><a  class="text-white">Usuario :</a></h5>
            	<h5><a  class="text-white">{{ Auth::user()->email }}</a></h5>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
                    @if(Auth::user()->admin == True)
                    <li><i class="icon ion-ios-paper"></i><div><a href="/admin/nuevo">Crear Perfil</a></div></li>
                    <li><i class="icon ion-ios-people"></i><div><a href="/admin/consultar">Consultar Perfil</a></div></li>
                    <li><i class="icon ion-ios-people-outline"></i><div><a href="/admin/nuevanoticia">Crear Noticia</a></div></li>
                    <li><i class="icon ion-chatboxes"></i><div><a href="/admin/nuevanotificacion">Crear Notificación</a></div></li>
                    <li><i class="icon ion-chatboxes"></i><div><a href="/admin/shownotificacion">Consultar Notificaciones</a></div></li>
                
                @else
                <li><i class="icon ion-ios-people-outline"></i><div><a href="/user/editar">Modificar Clave</a></div></li>
                <li><i class="icon ion-chatboxes"></i><div><a href="/user/nuevanotificacion">Crear Notificación</a></div></li>
                <li><i class="icon ion-chatboxes"></i><div><a href="/user/shownotificacion">Consultar Notificaciones</a></div></li>
                @endif
            </ul><!--news-feed links ends-->  
          </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
