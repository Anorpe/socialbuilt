@extends('layouts.home')
@section('title','Principal')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
@forelse ($notificaciones as $notificacion)
<div class="post-content">
    <div class="post-container">
        <h1 align="center">Notificación</h1>
        <div class="line-divider"></div>
        <img src="{{asset('images/post-images/notificacion.jpg')}}" alt="user" class="profile-photo-md pull-left" />
        <div class="post-detail">
            <h5>Asunto : {{$notificacion->asunto}} </h5>
            <div class="line-divider"></div>
            <div class="post-text">
                <p>
                <td>{{$notificacion -> cuerpo}}</td>
                </p>
            </div>
            <div class="post-text">
                <p>
                <td><h5>Atentamente: {{$notificacion -> email}}</h5></td>
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
            <h5>No hay notificaciones </h5>
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
    </div>
</div>
@endsection
