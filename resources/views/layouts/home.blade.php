@include('layouts.header')
    <div id="page-contents">
    	<div class="container">
    		<div class="row">
          <!-- Perfil Usuario
          ================================================= -->
    		<div class="col-md-3 static">
            <div class="profile-card">
                <img src="{{asset('images/users/principal.png')}}" alt="user" class="profile-photo" />
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
@include('layouts.footer')
