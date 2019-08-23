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
                    @forelse ($noticias as $noticia)
                            <div class="post-content">
                                <div class="post-container">
                                        <img src="images/post-images/noticia1.png" alt="user" class="profile-photo-md pull-left" />
                                    <div class="post-detail">
                                        <h5>{{$noticia->titulo}} </h5>
                                        <div class="line-divider"></div>
                                        <div class="post-text">
                                            <p>
                                            <td>{{$noticia -> created_at}}</td>
                                            </p>
                                        </div>
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
                         @endforelse  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
