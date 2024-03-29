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
                                    <h1 align="center">Crear Noticia</h1>
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
                                        <form method="POST" action="{{url('admin/crearnoticia')}}">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>
                                            <div>
                                                <input name="titulo"  id="titulo"  class="form-control" type="text" value="{{ old('titulo') }}" >
                                            </div>
                                            </div>
                                        <br>
                                            <div class="form-group row">
                                            <label for="Descripción" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
                                                <div>
                                                <input name="descripcion" id="descripcion" class="form-control" type="text" placeholder="{{ old('descripcion') }}" >
                                                </div>
                                                </div>
                                                <br>
                                            <div class="col-md-8 offset-md-4">
                                                 <button type="submit" class="btn btn-primary">
                                                    {{ __('Publicar') }}
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






