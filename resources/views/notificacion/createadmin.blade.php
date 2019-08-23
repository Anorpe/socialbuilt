@extends('layouts.home')
@section('title','Crear Notificación')
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
                                    <h1 align="center">Crear Notificación</h1>
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
                                            <form method="POST" action="{{url('admin/crearnotificacion')}}">

                                                @csrf
                                                <div class="form-group row">
                                                    <label for="asunto" class="col-md-4 col-form-label text-md-right">{{ __('Asunto') }}</label>

                                                    <div>
                                                        <input name="asunto" id="asunto" class="form-control" type="text" value="{{ old('asunto') }}" >

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ID Propiedad') }}</label>

                                                        <div>
                                                            <input name="email" id="email" class="form-control" type="text" value="{{ old('email') }}" >

                                                        </div>
                                                    </div>

                                                <div class="form-group row">
                                                    <label for="cuerpo" class="col-md-4 col-form-label text-md-right">{{ __('Cuerpo') }}</label>

                                                    <div>
                                                        <textarea name="cuerpo" id="cuerpo" class="form-control" type="text" value="{{ old('cuerpo') }}" ></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Enviar') }}
                                                    </button>
                                                </div>
                                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection








