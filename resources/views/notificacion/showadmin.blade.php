
@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Notificaciones') }}</div>

                    <div class="card-body">

                        <ul>
                            @if ($errors->any())
                                <div class ="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif

                        </ul>
                        @forelse ($notificaciones as $notificacion)
                            <div class="post-content">
                                <div class="post-container">
                                    <div class="post-detail">
                                        <h5>Asunto : {{$notificacion->titulo}} </h5>
                                        <div class="line-divider"></div>
                                        <div class="post-text">
                                            <p>
                                            <td>{{$notificacion -> cuerpo}}</td>
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





