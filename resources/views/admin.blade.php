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

          </div>
    		<div class="col-md-7">

            <!-- imprimiendo las noticias
            ================================================= -->
            @forelse ($noticias as $noticia)
            <div class="post-content">
              <div class="post-container">
                 <div class="post-detail">
                            <h5>Noticia : {{$noticia->titulo}} </h5>
                              <div class="line-divider"></div>
                                 <div class="post-text">
                                     <p>
                                        <td>{{$noticia -> descripcion}}</td>
                                     </p>
                                 </div>
                          <div class="line-divider"></div>

                </div>
              </div>
            </div>
            @empty
            <div class="post-content">
                    <div class="post-container">
                       <div class="post-detail">
                                  <h5>No hay noticias </h5>
                                    <div class="line-divider"></div>
                                       <div class="post-text">
                                           <p>

                                           </p>
                                       </div>
                                <div class="line-divider"></div>

                      </div>
                    </div>
                  </div>
            @endforelse
    		</div>
    	</div>
    </div>







