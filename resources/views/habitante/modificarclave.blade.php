@extends('layouts.home')
@section('title','Crear Noticia')
@section('stylessheets')
@endsection

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
                        <div class="post-content">
                            <div class="post-container">

                                <div class="post-detail">
                                    <h1 align="center">Modificar Contraseña</h1>
                                    <div class="line-divider"></div>
                                    <div class="post-text">
                                        <ul>
                                            @if ($errors->any())
                                                <div class ="alert alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </div>
                                            @endif

                                        </ul>
                                            <form method="POST" action={{route('updateclave',['user'=>$user])}}>
                                                    {{method_field('PUT')}}
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                                        <div class="col-md-6">
                                                            <input name="password"  class="form-control" id="password" type="password"  >

                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password" class="form-control" name="password-confirm" required autocomplete="new-password">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8 offset-md-4">
                                                        <button align="center" type="submit" class="btn btn-primary">
                                                            {{ __('Modificar Clave de Acceso') }}
                                                        </button>

                                                    </div>
                                                </form>
                                        </div>
                                    <div class="line-divider"></div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection








