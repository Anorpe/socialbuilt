<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
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
    
@include('header')

  <body>
    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Información del administrador (imagen y nombre)
          ================================================= -->
    			<div class="col-md-3 static">
            <div class="profile-card">
            	<img src="images/users/user-1.jpg" alt="user" class="profile-photo" />
            	<h5><a href="timeline.html" class="text-white">Administrador 1</a></h5>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div>Mi perfil</div></li>
            </ul><!--news-feed links ends-->
            <div id="chat-block">
              
            </div><!--chat block ends-->
          </div>
    			<div class="col-md-7">

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <!----<img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" /> -->
              <div class="post-container">
                 <div class="post-detail">
                    <div class="user-info">
                      </div>
                          @forelse ($noticias as $noticia)
                            <h5>Noticia</h5>
                              <div class="line-divider"></div>
                                 <div class="post-text">
                                     <p>
                                            <td {{$noticia->titulo}}</td>
                                            <td>{{$noticia -> descripcion}}</td>
                                     </p>
                                 </div>
                          <div class="line-divider"></div>
                          @empty
                          <li>No hay Noticias</li>
                          @endforelse
                </div>
              </div>
            </div>
    		</div>
    	</div>
    </div>
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
    <!-- Scripts
    ================================================= -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>






