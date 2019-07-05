@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Noticia') }}</div>

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
                        <form method="POST" action="{{url('admin/crearnoticia')}}">

                            @csrf







                            <div class="form-group row">
                                <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                                <div class="col-md-6">
                                    <input name="titulo" id="titulo" type="text" value="{{ old('titulo') }}" >

                                </div>
                            </div>

                            <br>

                            <div class="form-group row">
                                <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                                <div class="col-md-6">
                                    <input name="descripcion" id="descripcion" type="text" value="{{ old('descripcion') }}" >

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
                </div>
            </div>
        </div>
    </div>
@endsection






